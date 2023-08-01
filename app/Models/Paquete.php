<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{

    public function camionero(){
        return $this->belongsTo('App\Models\Paquete');
    }

    public function provincias(){
        return $this->belongsTo('App\Models\Provincias');

    }
}
