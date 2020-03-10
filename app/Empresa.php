<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function salida(){
        return $this->hasMany('App\Salida','empresa_id');
    }
}
