<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    //
    protected $guarded = [];

    protected static function boot(){
        parent::boot();
        static::deleting(function($photo){
            $photo->url = str_replace('img/banners/','',$photo->url);
            Storage::disk('public2')->delete($photo->url);
        });
    }
}
