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
            'energia' => 240,
            'grasas' => 20,
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

        DB::table('valor_alimentos')->insert([
            'alimento_id' => 2,
            'energia' => 89,
            'grasas' => 0.3,
            'g_saturadas' => 0.1,
            'g_monosaturadas' => 0,
            'g_poliinsaturadas' => 0,
            'g_trans' => 0,
            'carbohidratos' => 23,
            'azucares' => 12,
            'polialcoholes' => 0,
            'almidon' => 0,
            'fibra_alimentaria' => 2.6,
            'proteinas' => 1.1,
            'sodio' => 1,
            'calcio' => 0.5,
            'sal' => 0,
            'vitaminas' => 'C, B6, D, B12',
        ]);

        DB::table('valor_alimentos')->insert([
            'alimento_id' => 3,
            'energia' => 465,
            'grasas' => 17,
            'g_saturadas' => 5.6,
            'g_monosaturadas' => 0,
            'g_poliinsaturadas' => 0,
            'g_trans' => 0,
            'carbohidratos' => 69,
            'azucares' => 32,
            'polialcoholes' => 0,
            'almidon' => 0,
            'fibra_alimentaria' => 4,
            'proteinas' => 6.4,
            'sodio' => 0,
            'calcio' => 0,
            'sal' => 0.58,
            'vitaminas' => '',
        ]);
    }
}
