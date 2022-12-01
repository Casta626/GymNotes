<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EjerciciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ejercicios')->insert(

            [
                'musculo_id' => 1,
                'nombre' => 'Elevacion frontal',
                'descripcion' => 'En un banco realiza una elevacion.',
            ]
        );

        DB::table('ejercicios')->insert([
            'musculo_id' => 2,
            'nombre' => 'Elevaciones laterales',
            'descripcion' => 'En un banco realiza una elevacion.',
        ],);
        DB::table('ejercicios')->insert([
            'musculo_id' => 3,
            'nombre' => 'Face pull',
            'descripcion' => 'En un banco realiza una elevacion.',
        ],);
        DB::table('ejercicios')->insert([
            'musculo_id' => 4,
            'nombre' => 'Press Banca',
            'descripcion' => 'En un banco plano levanta una barra de forma vertical.',
        ],);
        DB::table('ejercicios')->insert([
            'musculo_id' => 5,
            'nombre' => 'Cruce en poleas',
            'descripcion' => 'En un banco realiza una elevacion.',
        ],);
        DB::table('ejercicios')->insert([
            'musculo_id' => 6,
            'nombre' => 'Jalón con una mano',
            'descripcion' => 'En un banco realiza una elevacion.',
        ],);
        DB::table('ejercicios')->insert([
            'musculo_id' => 7,
            'nombre' => 'Encogimiento de hombros',
            'descripcion' => 'En un banco realiza una elevacion.',
        ],);
        DB::table('ejercicios')->insert([
            'musculo_id' => 8,
            'nombre' => 'Jalón al pecho',
            'descripcion' => 'En un banco realiza una elevacion.',
        ],);
        DB::table('ejercicios')->insert(
            [
                'musculo_id' => 9,
                'nombre' => 'Elevación lateral propensa en banco',
                'descripcion' => 'En un banco realiza una elevacion.',
            ]

        );
    }
}
