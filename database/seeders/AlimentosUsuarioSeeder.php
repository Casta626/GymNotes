<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlimentosUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alimentos_usuarios')->insert([
            'usuario_id' => '1',
            'alimento_id' => '1',
            'fecha' => Carbon::now(),
        ]);
    }
}
