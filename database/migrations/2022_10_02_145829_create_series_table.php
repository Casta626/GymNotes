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
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_ejercicio_id')->references('id')->on('tipos_ejercicios');
            $table->string('nombre_musculo'); //* nombre_musculo_trabajado
            $table->text('descripcion');
            $table->float('tiempo_descanso');
            $table->float('peso');
            $table->float('repeticiones'); 
            $table->timestamp('inicio')->nullable();
            $table->timestamp('fin')->nullable();
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
        Schema::dropIfExists('series');
    }
};
