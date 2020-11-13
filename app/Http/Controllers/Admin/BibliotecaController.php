<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Biblioteca;
use App\Models\BibliotecaCategories;
use Carbon\Carbon;
use File;

class BibliotecaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        

        $Posts = Biblioteca::join('biblioteca_categries', 'biblioteca.category_id', '=', 'biblioteca_categries.id' )->where('category_id',4)->get();
        return view('dashboard.contenidos.index', compact('Posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $category_id = $id;
        return view('dashboard.biblioteca.create', compact('category_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string|max:255',
            'archivo' => 'required|max:4048'

        ]);

        $data = Biblioteca::create([
            'titulo' => $request->get('title'),
            'category_id' => $request->get('category_id'),
            'excerpt' => $request->get('excerpt'),
            'published_at' => $request->get('published_at_submit'),
        ]);

        $this->fileUpdate($data->id, $request, 1);

        return redirect()->route('admin.biblioteca.edit', $data)->with('flash','Tu publicación a sido guardada');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $category_id = $id;
        $Posts = Biblioteca::where('category_id',$id)->get();
        return view('dashboard.biblioteca.index', compact('Posts', 'category_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Biblioteca $biblioteca)
    {
        //
        return view('dashboard.biblioteca.edit', compact('biblioteca'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Biblioteca $biblioteca)
    {
        //
        $biblioteca->update([
            'titulo' => $request->get('titulo'),
            'excerpt' => $request->get('excerpt'),
            'published_at' => $request->get('published_at_submit'),
        ]);
        
        if($request->files->has('archivo')){
            $this->fileUpdate($biblioteca->id, $request, 2);
        }
        
        return redirect()->route('admin.biblioteca.edit', $biblioteca)->with('flash','Tu publicación a sido guardada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biblioteca $biblioteca)
    {
        //
        $category_id = $biblioteca->category_id;
        $this->deleteFile($biblioteca->id, $biblioteca);
        $biblioteca->delete();
        $Posts = Biblioteca::where('category_id',$category_id)->get();
        return redirect()->route('admin.biblioteca.show',['id' => $category_id])->with('flash','Tu publicación a sido Eliminada');
    }
    public function fileUpdate ($id, $data, $status){
        // $id = es el id del achivo
        // data informacion captura
        // status = 1 nuevo, 2 update
        $fileInfo = Biblioteca::where('id',$id)->first();
        $url = 'file/'.$fileInfo->category_id;
        $filename = $id.'_'.$data->archivo->getClientOriginalName().'_'. time() . '.' . $data->archivo->extension();
        $urlComplete = '/'.$url.'/'. $filename;

        if ($data->files->has('archivo') && $status ==2) {
        
            $old_archivo = public_path().$fileInfo->urlArchivo;
            if (file_exists($old_archivo)) {
                File::delete($old_archivo);
         
            }

            $data->archivo->move(public_path($url),$filename);
            $fileInfo->update(['urlArchivo' => $urlComplete]);
        }else{
            
            $data->archivo->move(public_path($url),$filename);
            $fileInfo->update(['urlArchivo' => $urlComplete]); 
        }
    }
    public function deleteFile ($id, $data){
        $old_archivo = public_path().$data->urlArchivo;
        if (file_exists($old_archivo)) {
            File::delete($old_archivo);
        
        }
    }
}
