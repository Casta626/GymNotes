<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call (UsuariosSeeder::class);
        $this->call (AlimentosSeeder::class);
        $this->call (ValorAlimentoSeeder::class);
        $this->call (TiposEjercicioSeeder::class);
        $this->call (SerieSeeder::class);
        $this->call (DiaSeeder::class);
    }
}
