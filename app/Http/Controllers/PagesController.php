<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;
use App\Tag;
use App\Section;
use App\Models\Testimonio;
use App\Models\Staff;
use App\Models\PostExtras;
use App\Models\biblioteca;
use App\Models\BibliotecaCategories;
use App\Models\Email;
use App\BannersPostIndex;
use Carbon\Carbon;

class PagesController extends Controller
{
    //
    public function spa(){
        return view('pages.spa');
    }
    public function home(){
        $pageinfo = Post::with('sections')->findOrFail(1);
        $noticias = Post::published()->where('category_id',2)->take(3)->get();
        

        return [ 'pageinfo' => $pageinfo, 'noticias'=>$noticias ];
    }

    public function homev2(){
        $codetalk = Post::published()->join('post_extra', 'posts.id', '=', 'post_extra.post_id')->where('category_id',7)->orderBy('published_at','DESC')->first();
        $codesinHechos = Post::published()->join('post_extra', 'posts.id', '=', 'post_extra.post_id')->where('category_id',8)->orderBy('published_at','DESC')->first();
        $sinaloaNum = Post::published()->join('post_extra', 'posts.id', '=', 'post_extra.post_id')->where('category_id',9)->orderBy('published_at','DESC')->first();
        
        if(is_null($codetalk)){
            $codetalk = (object)[];
            $codetalk->status = false;
            $codetalk->published_at = Carbon::create(1899, 1, 1, 0, 0, 0, 'America/Toronto');;
        }
        if(is_null($codesinHechos)){
            $codesinHechos = (object)[];
            $codesinHechos->status = false;
            $codesinHechos->published_at = Carbon::create(1899, 1, 1, 0, 0, 0, 'America/Toronto');
        }
        if(is_null($sinaloaNum)){
            $sinaloaNum = (object)[];
            $sinaloaNum->status = false;
            $sinaloaNum->published_at = Carbon::create(1899, 1, 1, 0, 0, 0, 'America/Toronto');
        }
        
        $a = array();
        $a[71] = Array ('author' => $codetalk, 'date' => $codetalk->published_at );
        $a[49] = Array ( 'author' => $codesinHechos, 'date' => $codesinHechos->published_at ) ;
        $a[75] = Array ( 'author' => $sinaloaNum, 'date' => $sinaloaNum->published_at) ;
        
        $date = array();

        foreach ($a as $key => $row) {
            $date[$key]  = $row['date'];    
        }
        // array_multisort($date, SORT_ASC, $a);
        array_multisort($date, SORT_DESC, $a);

        $noticias = Post::published()->where('category_id',2)->take(3)->get();
        return [ 'pagInfo' =>  $a, 'noticias'=>$noticias];
    }

    public function quienesSomos(){

        $pageinfo = Post::findOrFail(2);
        $sections = Section::first();
        $testimonios = Testimonio::orderBy('id')->get();
        $consejos = Staff::where('departamento_id',1)->get();
        $estatales = Staff::where('departamento_id',2)->get();
        $zonaNorte = Staff::where('departamento_id',3)->get();
        $zonaCentroNorte = Staff::where('departamento_id',4)->get();
        $zonaCentro = Staff::where('departamento_id',5)->get();
        $zonaSur = Staff::where('departamento_id',6)->get();
        if( request()->wantsJson() )
        {
            return [ 
                    'pageinfo' => $pageinfo,
                    'sections' => $sections,
                    'testimonios' => $testimonios,
                    'consejos' => $consejos,
                    'estatales' => $estatales,
                    'zonaNorte' => $zonaNorte,
                    'zonaCentroNorte' => $zonaCentroNorte,
                    'zonaCentro' => $zonaCentro,
                    'zonaSur' => $zonaSur


                ];
        }
        return view('pages.about');
    }

    public function queHacemos(){
        $pageinfo = Post::findOrFail(3);
        $estrategias =  Post::where('category_id',5)->get();
        $proyectosAll = Post::published()->where('category_id',3);
        $proyectos = $proyectosAll->take(3);
        $politicas = Post::Published()->where('category_id',6)->take(3)->get();
        $staff = Staff::where('departamento_id',7)->get();
        $znorte = Tag::where('id', 1)->with('posts')->withCount('posts')->first();
        $zcnorte = Tag::where('id', 2)->with('posts')->withCount('posts')->first();
        $zcentro = Tag::where('id', 3)->with('posts')->withCount('posts')->first();
        $zsur = Tag::where('id', 4)->with('posts')->withCount('posts')->first();
        if( request()->wantsJson() )
        {
            return [
                'pageinfo' => $pageinfo,
                'estrategias' => $estrategias,
                'proyectos' => $proyectos,
                'politicas' => $politicas,
                'staff' => $staff,
                'znorte' => $znorte,
                'zcnorte' => $zcnorte,
                'zcentro' => $zcentro,
                'zsur' => $zsur
            ];
        }
    }

    public function comunicacion(){

        $estrategias = Post::where('category_id',4)->latest()->get();
        // $noticias = Post::published()->where('category_id',2)->take(3)->get();
        foreach ($estrategias as $estrategia) {
            $text = $estrategia->excerpt;
            $maxPos = 153;
            if (strlen($text) > $maxPos)
            {
                $lastPos = ($maxPos - 3) - strlen($text);
                $estrategia->excerpt = substr($text, 0, strrpos($text, ' ', $lastPos)) . '...';
            }
        }
        if( request()->wantsJson() )
        {
            return [
                'contenidoInsteres' => $estrategias,
                // 'noticias' => $noticias
            ];
        }
    }

    public function indexsearch(Request $request){
        $keywords = request('keywords');
        $posts = Post::where('title', 'LIKE', "%{$keywords}%")->where('category_id','!=', '4')
        ->orWhere('body', 'LIKE', "%{$keywords}%")
        ->orderBy('id')
        ->get();
        return $posts;
    }
    public function sinaloaNumeros(){
        $sinaloaNum = Post::published()->join('post_extra', 'posts.id', '=', 'post_extra.post_id')->where('category_id',9)->orderBy('published_at','DESC')->get();
        $banners = BannersPostIndex::where('category_id',9)->first();
        return [ 'sinaloaNum' =>  $sinaloaNum, 'banners' => $banners];
    }
    public function codetalks(){
        $codetalks = Post::published()->join('post_extra', 'posts.id', '=', 'post_extra.post_id')->where('category_id',7)->orderBy('published_at','DESC')->get();
        $banners = BannersPostIndex::where('category_id',7)->first();
        return [ 'codetalks' =>  $codetalks, 'banners' => $banners];
    }
    public function codesinHechos(){
        $codesinHechos = Post::published()->join('post_extra', 'posts.id', '=', 'post_extra.post_id')->where('category_id',8)->orderBy('published_at','DESC')->get();
        $banners = BannersPostIndex::where('category_id',8)->first();
        return [ 'codesinHechos' =>  $codesinHechos, 'banners' => $banners];
    }
    public function historia(){
        $pageinfo = Post::findOrFail(4);

        return [ 'pageinfo' =>  $pageinfo];
    }
    public function covid(){
        $pageinfo = Post::findOrFail(5);

        return [ 'pageinfo' =>  $pageinfo];
    }
    public function biblioteca(){
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

        $categorias =  BibliotecaCategories::get();
        $categoria1 = biblioteca::where('category_id',1)->orderBy('published_at', 'DESC')->get();
        $categoria2 = biblioteca::where('category_id',2)->orderBy('published_at', 'DESC')->get();
        $categoria3 = biblioteca::where('category_id',3)->orderBy('published_at', 'DESC')->get();
        $categoria4 = biblioteca::where('category_id',4)->orderBy('published_at', 'DESC')->get();

        $categoria1 = $this->formatDate($categoria1);
        $categoria2 = $this->formatDate($categoria2);
        $categoria3 = $this->formatDate($categoria3);
        $categoria4 = $this->formatDate($categoria4);

        return [ 
            'categoria1' =>  $categoria1,
            'categoria2' =>  $categoria2,
            'categoria3' =>  $categoria3,
            'categoria4' =>  $categoria4,
            'categorias' => $categorias];
    }
    public function storeEmail(Request $request){

        Email::create(['email' => $request->email]);

        return 'llegue';
    }
    public function formatDate($obj){
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        foreach ($obj as $key => $value) {
            $fecha = Carbon::parse($value->published_at);
            $mes = $meses[($fecha->format('n')) - 1];
            $value->published_at = $fecha->format('d') . ' de ' . $mes . ' de ' . $fecha->format('Y');
        }
        return $obj;
    }
}
