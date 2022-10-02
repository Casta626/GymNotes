<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ValorAlimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('valor_alimentos')->truncate();
        DB::table('valor_alimentos')->insert([
            'alimento_id' => 1,
            'energia' => '240',
            'grasas' => '20',
            'g_saturadas' => 12,
            'g_monosaturadas' => 2,
            'g_poliinsaturadas' => 1,
            'g_trans' => 5,
            'carbohidratos' => 40,
            'azucares' => 20,
            'polialcoholes' => 5,
            'almidon' => 5,
            'fibra_alimentaria' => 10,
            'proteinas' => 25,
            'sodio' => 1.5,
            'calcio' => 0.5,
            'sal' => 1,
            'vitaminas' => 'V6, V5, D4',
        ]);
    }
}
