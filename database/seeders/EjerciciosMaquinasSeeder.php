<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EjerciciosMaquinasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ejercicios_maquinas')->insert([
            'id' => 1,
            'agrupacion_ejercicio_id' => 1,
            'id_ejercicio' => 'Elevacion frontal',
            'descripcion' => 'En un banco realiza una elevacion.',
        ]);
    }
}
