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
        Schema::create('valor_alimentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alimento_id')->references('id')->on('alimentos');
            $table->integer('energia')->nullable();
            $table->float('grasas')->nullable();
            $table->float('g_saturadas')->nullable();
            $table->float('g_monosaturadas')->nullable();
            $table->float('g_poliinsaturadas')->nullable();
            $table->float('g_trans')->nullable();
            $table->float('carbohidratos');
            $table->float('azucares')->nullable();
            $table->float('polialcoholes')->nullable();
            $table->float('almidon')->nullable();
            $table->float('fibra_alimentaria')->nullable();
            $table->float('proteinas')->nullable();
            $table->float('sodio')->nullable();
            $table->float('calcio')->nullable();
            $table->float('sal')->nullable();
            $table->text('vitaminas')->nullable();
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
        Schema::dropIfExists('valor_alimentos');
    }
};
