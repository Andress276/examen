<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('paquetes', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('destinatario');
            $table->string('direccion');
            $table->unsignedBigInteger('provincias_id')->nullable();
            $table->foreign('provincias_id')->references('id')->on('provincias')->onDelete('set null');
            
            $table->unsignedBigInteger('camioneros_id')->nullable();
            $table->foreign('camioneros_id')->references('id')->on('camioneros')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paquetes');
    }
};
