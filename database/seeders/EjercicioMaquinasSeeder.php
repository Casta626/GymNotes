<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EjercicioMaquinasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ejercicio_maquinas')->insert([
            'id' => 1,
            'agrupacion_ejercicio_id' => 1,
            'ejercicio_id' => 1,
            'descripcion' => 'En un banco realiza una elevacion.',
        ]);
    }
}
