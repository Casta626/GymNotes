<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('series')->truncate();
        DB::table('series')->insert([
            'id' => 1,
            'tipo_ejercicio_id' => 1,
            'nombre_musculo' => 'Dorsales',
            'descripcion' => 'Jalón',
            'tiempo_descanso' => 45,
            'peso' => 80,
            'repeticiones' => 12,
            
            
        ]);
    }
}
