<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposEjercicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function insertar($id, $grupo_muscular){
        DB::table('tipos_ejercicios')->insert([
            'id' => $id,
            'usuario_id' => 1,
            'grupo_muscular' => $grupo_muscular,
        ]);
    }

    public function run()
    {
        //DB::table('tipos_ejercicios')->truncate();
        DB::table('tipos_ejercicios')->insert([
            'id' => 1,
            'usuario_id' => 1,
            'grupo_muscular' => 'Espalda',
        ]);

        DB::table('tipos_ejercicios')->insert([
            'id' => 2,
            'usuario_id' => 1,
            'grupo_muscular' => 'Pecho',
        ]);

        DB::table('tipos_ejercicios')->insert([
            'id' => 3,
            'usuario_id' => 1,
            'grupo_muscular' => 'Hombros',
        ]);

        DB::table('tipos_ejercicios')->insert([
            'id' => 4,
            'usuario_id' => 1,
            'grupo_muscular' => 'Abdominales',
        ]);

        DB::table('tipos_ejercicios')->insert([
            'id' => 5,
            'usuario_id' => 1,
            'grupo_muscular' => 'Piernas',
        ]);

        DB::table('tipos_ejercicios')->insert([
            'id' => 6,
            'usuario_id' => 1,
            'grupo_muscular' => 'Gemelos',
        ]);

        DB::table('tipos_ejercicios')->insert([
            'id' => 7,
            'usuario_id' => 1,
            'grupo_muscular' => 'Brazos',
        ]);

        DB::table('tipos_ejercicios')->insert([
            'id' => 8,
            'usuario_id' => 1,
            'grupo_muscular' => 'Cuello',
        ]);
    }
}
