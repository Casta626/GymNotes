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
            $table->foreignId('ejercicio_maquina_id')->references('id')->on('ejercicio_maquinas')->onDelete('cascade');
            $table->float('peso')->nullable();
            $table->float('repeticiones')->nullable(); 
            $table->float('tiempo_descanso')->nullable();
            $table->text('descripcion')->nullable(); //Por si quiere añadir algo extra en la serie
            $table->timestamp('inicio')->nullable(); //Boton para que no tenga que estar entrando y saliendo de la app
            $table->timestamp('fin')->nullable(); //Boton para que no tenga que estar entrando y saliendo de la app
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
