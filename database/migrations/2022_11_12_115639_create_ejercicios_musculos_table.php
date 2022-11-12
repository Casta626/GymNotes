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
        Schema::create('ejercicios_musculos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('musculo_id')->references('id')->on('musculos');
            $table->foreignId('ejercicio_id')->references('id')->on('ejercicios');
            $table->enum('tipo_activacion', ['Primario', 'Secundario'])->nullable(); //Primario / Secundario
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ejercicios_musculos');
    }
};
