<?php

namespace App\Http\Controllers;

use App\Models\AgrupacionesEjercicios;
use App\Models\Rutina;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EjercicioController extends Controller
{
    public function index() 
    {
        setlocale(LC_ALL, 'es_ES');
        // $agrupaciones_ejercicios = DB::table('agrupaciones_ejercicios')->get();
        $usuarios = Usuario::with('agrupacionesEjercicios')->get();
        // $rutinas = Rutina::with('agrupacionesEjercicios')->get();
        // return view('ejercicio.index', ['agrupaciones_ejercicios' => $agrupaciones_ejercicios]);
        dd($usuarios);
        return view('ejercicio.index', compact('usuarios'));
    }
}
