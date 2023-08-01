<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camioneros extends Model
{

    public function camiones()
    {
        return $this->belongsToMany('App\Models\Camiones');
    }

    public function paquete(){
        return $this->hasMany('App\Models\Paquete');
    }
}
