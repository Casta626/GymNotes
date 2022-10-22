<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('usuarios')->truncate();
        DB::table('users')->insert([
            'nombre' => 'José Antonio',
            'apellido1' => 'Castañeda',
            'apellido2' => 'Pavón',
            'username' => 'Pepe Llejos',
            'email' => 'pepellejos@gmail.com',
            'password' => '1234',
            'telefono' => '654 66 44 22',
            'pais' => 'España',
        ]);
    }
}
