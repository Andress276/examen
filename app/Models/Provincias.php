<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincias extends Model
{
 
    public function paquete(){
        return $this->hasMany('App\Models\Paquete');
    }


    
}
