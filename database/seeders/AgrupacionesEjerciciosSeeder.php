<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgrupacionesEjerciciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('dias')->truncate();
        DB::table('agrupaciones_ejercicios')->insert([
            'id' => 1,
            'usuario_id' => 1,
            'rutina_id' => 1,
        ]);
    }
}
