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
        Schema::create('musculos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('grupo_muscular')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('foto')->nullable();
            $table->string('info')->nullable();
            $table->timestamps();
            //meter una imgaen para cada musculo?, mas visible para el usuario
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musculos');
    }
};
