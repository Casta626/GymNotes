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
        Schema::create('alimentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->references('id')->on('usuarios');
            $table->unsignedBigInteger('codigo_barras')->nullable();
            $table->string('tipo_ean')->nullable();
            $table->string('marca')->nullable();
            $table->string('nombre')->nullable();
            $table->string('descripcion')->nullable();
            $table->timestamp('fecha_creacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alimentos');
    }
};
