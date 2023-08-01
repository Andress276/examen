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
        Schema::create('camioneros_camiones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('camioneros_id');
            $table->unsignedBigInteger('camiones_id');
            $table->foreign('camioneros_id')->references('id')->on('camioneros')->onDelete('cascade');
            $table->foreign('camiones_id')->references('id')->on('camiones')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        Schema::dropIfExists('camioneros_camiones');
    }
};
