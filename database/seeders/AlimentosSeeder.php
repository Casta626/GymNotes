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
            'codigo_barras' => '347263283',
            'tipo_ean' => 'EAN-13',
            'marca' => 'Monster',
            'nombre' => 'Mango Loco',
            'descripcion' => 'Bebida energética de mango',
        ]);
    }
}
