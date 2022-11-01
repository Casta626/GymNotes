<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejercicio_maquinas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agrupacion_ejercicio_id')->references('id')->on('agrupaciones_ejercicios');
            $table->foreignId('ejercicio_id')->references('id')->on('ejercicios');
            $table->string('descripcion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ejercicios_maquinas');
    }
};