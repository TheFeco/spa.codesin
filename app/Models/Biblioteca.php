<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biblioteca extends Model
{
    //
    protected $table = 'biblioteca';
    protected $fillable = [
        'category_id',
        'titulo',
        'excerpt',
        'published_at',
        'urlArchivo'
    ];
}
