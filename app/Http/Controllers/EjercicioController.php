<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EjercicioController extends Controller
{
    public function index() 
    {

        $series = DB::table('series')->get();
        return view('ejercicio.index', ['series' => $series]);
    }
}
