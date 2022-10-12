<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EjercicioController extends Controller
{
    public function index() 
    {
        setlocale(LC_ALL, 'es_ES');
        $agrupaciones_ejercicios = DB::table('agrupaciones_ejercicios')->get();
        return view('ejercicio.index', ['agrupaciones_ejercicios' => $agrupaciones_ejercicios]);
    }
}
