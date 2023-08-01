<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamionerosTable extends Migration
{
    public function up()
    {
        Schema::create('camioneros', function (Blueprint $table) {
            $table->id();
            $table->string('poblacion');
            $table->string('nombre');
            $table->string('telefono');
            $table->string('direccion');
            $table->decimal('salario', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('camioneros');
    }
};
