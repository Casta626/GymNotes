<?php

namespace App\Http\Controllers;

use App\Models\AgrupacionesEjercicios;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EjercicioController extends Controller
{
    public function index() 
    {
        setlocale(LC_ALL, 'es_ES');
        $agrupaciones_ejercicios = DB::table('agrupaciones_ejercicios')->get();
        // $usuarios = AgrupacionesEjercicios::with('usuarios')->get();
        return view('ejercicio.index', ['agrupaciones_ejercicios' => $agrupaciones_ejercicios]);
        // return view('ejercicio.index', compact('agrupaciones_ejercicios'));
    }
}
