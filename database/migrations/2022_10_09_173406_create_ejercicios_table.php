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
        Schema::create('ejercicios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('musculo_id')->references('id')->on('musculos');
            $table->String('nombre');
            $table->String('descripcion');
            //añadir un campo de tipo para ver si el ejercicio se hace con barras, macuernas, maquina o calistenico
            //meter una imgaen para cada ejercicio?, mas visible para el usuario
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ejercicios');
    }
};
