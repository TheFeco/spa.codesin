<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;
use App\Tag;
use App\Models\Testimonio;
use App\Models\Staff;
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

    public function quienesSomos(){

        $pageinfo = Post::findOrFail(2);
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
        $noticias = Post::published()->where('category_id',2)->take(3)->get();
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
                'noticias' => $noticias
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
}
