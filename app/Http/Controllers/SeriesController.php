<?php

namespace App\Http\Controllers;

use App\Models\AgrupacionesEjercicios;
use App\Models\Ejercicio;
use App\Models\EjercicioMaquina;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPSTORM_META\map;

class SeriesController extends Controller
{
    
    public function pruebas() 
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

    public function getSeries()
    {
        $usuario = Auth::id();
        $usuarios = User::where('id', $usuario)->with('agrupacionesEjercicios.ejercicioMaquina.serie')->get();

        return view ('ejercicio.index', ['usuarios' => $usuarios]);
    }
}
