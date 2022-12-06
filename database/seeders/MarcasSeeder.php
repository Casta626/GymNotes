<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marcas')->insert([
            'nombre' => 'Monster Energy',
            'fecha_creacion' => '2002',
        ]);

        DB::table('marcas')->insert([
            'nombre' => 'Platano de Canarias',
            'fecha_creacion' => '1500',
        ]);

        DB::table('marcas')->insert([
            'nombre' => 'Principe',
            'fecha_creacion' => '1890',
        ]);
    }
}
