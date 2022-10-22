<?php

namespace App\Http\Controllers;

use App\Models\AgrupacionesEjercicios;
use App\Models\Ejercicio;
use App\Models\EjercicioMaquina;
use App\Models\User;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class SeriesController extends Controller
{
    public function pruebas2() 
    {
        $id = 2;
        setlocale(LC_ALL, 'es_ES');
        // $agrupaciones_ejercicios = DB::table('agrupaciones_ejercicios')->get();
        $user = User::find($id);
        $usuarios = $user->with('agrupacionesEjercicios')->get();
        $agrupaciones_ejercicios = AgrupacionesEjercicios::with('ejercicioMaquina')->get();
        // $ejercicio_maquina = EjercicioMaquina::with('serie')->get();
        // $rutinas = Rutina::with('agrupacionesEjercicios')->get();
        // return view('ejercicio.index', ['agrupaciones_ejercicios' => $agrupaciones_ejercicios]);
        // dd($usuarios);
        // dd($usuarios);

        return User::find($id)->agrupaciones_ejercicios()->get();
    }

    public function pruebas(Request $request)
    {
        $reps = [1, 0.95, 0.90, 0.86, 0.82, 0.78, 0.74, 0.70, 0.65, 0.61, 0.57, 0.53 ];
        $valor = $reps[($request->rep - 1)];
        $rm = $request->peso;
        $repsCount = count($reps);
        $valoresRM = [];
        // $operacion = number_format((float)$rm/$valor, 2, ',', '');
        for ($i = 0; $i < $repsCount; ++$i){
            $operacion = number_format((float)$rm/$reps[$i], 2, ',', '');

            array_push($valoresRM,$operacion);
        }

        $resultado = 90/0.82;
        
        return $valoresRM;
    }
}
