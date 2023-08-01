<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamionesTable extends Migration
{
    public function up()
    {
        Schema::create('camiones', function (Blueprint $table) {
            $table->id();
            $table->integer('potencia');
            $table->string('modelo');
            $table->string('tipo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('camiones');
    }
};

