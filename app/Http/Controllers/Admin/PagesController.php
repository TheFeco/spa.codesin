<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;
use App\Category;
use App\Tag;
use Carbon\Carbon;
use File;

class PagesController extends Controller
{
    //
    public function edit(Post $post){
        $post->load('category','photos');

        return view('dashboard.principal.edit', compact('post'));
    }

    public function update(Post $post, Request $request){
        if ($request->files->has('banner')) {
            $request->validate([
                'banner' => 'required|image|max:4048' // jpeg, pnp, bmp, gif, svg
            ]);

            $old_image = public_path().$post->urlBanner;
            // dd(file_exists($old_image));
            if (file_exists($old_image)) {
                File::delete($old_image);
         
            }

            $filename = 'banner_' . $post->id .'_'. time() . '.' . $request->banner->extension();
            $urlBanner = '/img/banners/'. $filename;
            $request->banner->move(public_path('img/banners'),$filename);
            $post->update(['urlBanner' => $urlBanner]);
        }
        if ($request->files->has('bannerMobile')) {
            $request->validate([
                'bannerMobile' => 'required|image|max:4048' // jpeg, pnp, bmp, gif, svg
            ]);
            $old_image = public_path().$post->bannerMobile;
            if (file_exists($old_image)) {

                File::delete($old_image);
         
            }

            $filename = 'banner_Mobile_' . $post->id .'_'. time() . '.' . $request->bannerMobile->extension();
            $urlBanner = '/img/banners/'. $filename;
            $request->bannerMobile->move(public_path('img/banners'),$filename);
            $post->update(['urlBannerMobile' => $urlBanner]);
        }
        // actualizando imagen
        if ($request->files->has('img')) {
            $request->validate([
                'img' => 'required|image|max:4048' // jpeg, pnp, bmp, gif, svg
            ]);

            $old_image = public_path().$post->urlimage;
            if (file_exists($old_image)) {

                File::delete($old_image);
         
            }
            $filename = 'img_' . $post->id .'_'. time() . '.' . $request->img->extension();
            $urlimage = '/img/'. $post->url .'/'. $filename;
            $folder = 'img/'.$post->url;
            $request->img->move($folder,$urlimage);
            $post->update(['urlimage' => $urlimage]);
        }
        //  actualizando imagen para mobile
        if ($request->files->has('imgMobile')) {
            $request->validate([
                'imgMobile' => 'required|image|max:4048' // jpeg, pnp, bmp, gif, svg
            ]);
            $old_image = public_path().$post->urlimageMobile;
            if (file_exists($old_image)) {

                File::delete($old_image);
         
            }
            $filenameMobile = 'img_Mobile_' . $post->id .'_'. time() . '.' . $request->imgMobile->extension();
            $urlimgMobile = "/img/".$post->url.'/'. $filenameMobile;
            $folder = 'img/'.$post->url;
            $request->imgMobile->move($folder,$urlimgMobile);
            $post->update(['urlimageMobile' => $urlimgMobile]);
        }
        $post->update([
            'title' => $request->get('title'),
            'body' => $request->get('body'),
            'urlvideo' => $request->get('urlvideo'),
            'externalUrl' => $request->get('externalUrl')
        ]);


        
       return redirect()->route('admin.paginas.edit', $post)->with('flash','La pagina principal ha sido actualizada');
    }
}
