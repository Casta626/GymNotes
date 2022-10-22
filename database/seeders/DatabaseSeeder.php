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
        $this->call (UserSeeder::class);
        $this->call (RutinasSeeder::class);
        $this->call (AgrupacionesEjerciciosSeeder::class);
        $this->call (MusculosSeeder::class);
        $this->call (EjerciciosSeeder::class);
        $this->call (EjerciciosMaquinasSeeder::class);
        $this->call (MarcasSeeder::class);
        $this->call (EanSeeder::class);
        $this->call (AlimentosSeeder::class);
        $this->call (ValorAlimentoSeeder::class);
    }
}
