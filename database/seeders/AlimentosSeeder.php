<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlimentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('alimentos')->truncate();
        DB::table('alimentos')->insert([
            'marca_id' => 1,
            'ean_id' => 1,
            'codigo_barras' => '347263283',
            'nombre' => 'Mango Loco',
            'descripcion' => 'Bebida energética de mango',
            'fecha_creacion' => '2020/10/10',
        ]);

        DB::table('alimentos')->insert([
            'marca_id' => 2,
            'ean_id' => 1,
            'codigo_barras' => '123456789',
            'nombre' => 'Plátano',
            'descripcion' => 'Fruta directa de canaria.',
            'fecha_creacion' => '1500/10/10',
        ]);

        DB::table('alimentos')->insert([
            'marca_id' => 3,
            'ean_id' => 1,
            'codigo_barras' => '987654321',
            'nombre' => 'Caja Galletas Principe',
            'descripcion' => 'Galletas Principe rellenas de chocolate',
            'fecha_creacion' => '1890/10/10',
        ]);
    }
}
