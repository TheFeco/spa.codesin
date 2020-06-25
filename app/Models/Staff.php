<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    
    protected $table = 'Personal';
    protected $fillable = ['departamento_id','urlimg', 'name', 'urlvideo', 'email', 'job','user_id'];

    public function departamento (){
        return $this->belongsTo('App\Models\Departamento','departamento_id');
    }

    public function scopeAllowed($query){
        return $query;
        
   }
}
