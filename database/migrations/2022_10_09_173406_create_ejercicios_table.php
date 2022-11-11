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
            $table->string('nombre');
            $table->string('descripcion');
            $table->timestamps();
            //añadir un campo de tipo para ver si el ejercicio se hace con barras, macuernas, maquina o calistenico
            //meter una imgaen para cada ejercicio?, mas visible para el usuario
        });

        /*
        php artisan make:migrate create_ejercicios_musculos_table
        Schema::create('ejercicios_musculos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('musculo_id')->references('id')->on('musculos');
            $table->foreignId('ejercicio_id')->references('id')->on('ejercicios');
            $table->String('intensidad'); //Primario / Secundario
            $table->timestamps();
        });
        
        */
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
