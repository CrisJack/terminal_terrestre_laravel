<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salida extends Model
{
    public function empresa(){
        return $this->belongsTo('App\empresa');
    }
}
