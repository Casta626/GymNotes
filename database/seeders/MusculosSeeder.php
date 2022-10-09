<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MusculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('musculos')->insert([
            'id' => 1,
            'nombre' => 'Deltoides frontal',
            'grupo_muscular' => 'Hombro',
        ]);

        DB::table('musculos')->insert([
            'id' => 2,
            'nombre' => 'Deltoides lateral',
            'grupo_muscular' => 'Hombro',
        ]);

        DB::table('musculos')->insert([
            'id' => 3,
            'nombre' => 'Deltoides posterior',
            'grupo_muscular' => 'Hombro',
        ]);

        DB::table('musculos')->insert([
            'id' => 4,
            'nombre' => 'Pectoral mayor',
            'grupo_muscular' => 'Pecho',
        ]);

        DB::table('musculos')->insert([
            'id' => 5,
            'nombre' => 'Pectoral menor',
            'grupo_muscular' => 'Pecho',
        ]);

        DB::table('musculos')->insert([
            'id' => 6,
            'nombre' => 'Serrato anterior',
            'grupo_muscular' => 'Pecho',
        ]);

        DB::table('musculos')->insert([
            'id' => 7,
            'nombre' => 'Trapecio',
            'grupo_muscular' => 'Espalda',
        ]);

        DB::table('musculos')->insert([
            'id' => 8,
            'nombre' => 'Dorsal ancho',
            'grupo_muscular' => 'Espalda',
        ]);

        DB::table('musculos')->insert([
            'id' => 9,
            'nombre' => 'Romboides',
            'grupo_muscular' => 'Espalda',
        ]);

        DB::table('musculos')->insert([
            'id' => 10,
            'nombre' => 'Intrinsicos',
            'grupo_muscular' => 'Espalda',
        ]);

        DB::table('musculos')->insert([
            'id' => 11,
            'nombre' => 'Recto abdominal',
            'grupo_muscular' => 'Abdomen',
        ]);

        DB::table('musculos')->insert([
            'id' => 12,
            'nombre' => 'Oblicuos externos',
            'grupo_muscular' => 'Abdomen',
        ]);

        DB::table('musculos')->insert([
            'id' => 13,
            'nombre' => 'Oblicuo interno',
            'grupo_muscular' => 'Abdomen',
        ]);

        DB::table('musculos')->insert([
            'id' => 14,
            'nombre' => 'Transverso abdominal',
            'grupo_muscular' => 'Abdomen',
        ]);

        DB::table('musculos')->insert([
            'id' => 15,
            'nombre' => 'Cabeza larga',
            'grupo_muscular' => 'Biceps',
        ]);

        DB::table('musculos')->insert([
            'id' => 16,
            'nombre' => 'Cabeza corta',
            'grupo_muscular' => 'Biceps',
        ]);

        DB::table('musculos')->insert([
            'id' => 17,
            'nombre' => 'Braquial',
            'grupo_muscular' => 'Biceps',
        ]);

        DB::table('musculos')->insert([
            'id' => 18,
            'nombre' => 'Cabeza larga',
            'grupo_muscular' => 'Triceps',
        ]);

        DB::table('musculos')->insert([
            'id' => 19,
            'nombre' => 'Cabeza lateral',
            'grupo_muscular' => 'Triceps',
        ]);

        DB::table('musculos')->insert([
            'id' => 20,
            'nombre' => 'Cabeza medial',
            'grupo_muscular' => 'Triceps',
        ]);

        DB::table('musculos')->insert([
            'id' => 21,
            'nombre' => 'Supinadores',
            'grupo_muscular' => 'Antebrazo',
        ]);

        DB::table('musculos')->insert([
            'id' => 22,
            'nombre' => 'Pronadores',
            'grupo_muscular' => 'Antebrazo',
        ]);

        DB::table('musculos')->insert([
            'id' => 23,
            'nombre' => 'Cuadriceps',
            'grupo_muscular' => 'Piernas',
        ]);

        DB::table('musculos')->insert([
            'id' => 24,
            'nombre' => 'Femorales',
            'grupo_muscular' => 'Piernas',
        ]);

        DB::table('musculos')->insert([
            'id' => 25,
            'nombre' => 'Aductores',
            'grupo_muscular' => 'Piernas',
        ]);

        DB::table('musculos')->insert([
            'id' => 26,
            'nombre' => 'Gluteos',
            'grupo_muscular' => 'Piernas',
        ]);

        DB::table('musculos')->insert([
            'id' => 27,
            'nombre' => 'Gemelos',
            'grupo_muscular' => 'Piernas',
        ]);



    }
}
