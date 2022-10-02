<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('dias')->truncate();
        DB::table('dias')->insert([
            'id' => 1,
            'usuario_id' => 1,
            'alimento_id' => 1,
            'tipo_ejercicio' => 1,
        ]);
    }
}
