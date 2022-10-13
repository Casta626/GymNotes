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
            'usuario_id' => 1,
            'marca_id' => 1,
            'ean_id' => 1,
            'codigo_barras' => '347263283',
            'nombre' => 'Mango Loco',
            'descripcion' => 'Bebida energética de mango',
            'fecha_creacion' => '2020/10/10',
        ]);
    }
}
