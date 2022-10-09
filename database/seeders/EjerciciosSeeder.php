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
        DB::table('musculos')->insert([
            'id' => 1,
            'musculo_id' => 1,
            'nombre' => 'Elevacion frontal',
            'descripcion' => 'En un banco realiza una elevacion.',
        ]);
    }
}
