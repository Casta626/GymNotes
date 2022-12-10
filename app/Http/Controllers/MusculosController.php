<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MusculosController extends Controller
{
    public function index() 
    {
        $musculos = DB::table('musculos')->get();
        return view('musculo.index', ['musculos' => $musculos]);
    }

    public function musculos() 
    {
        setlocale(LC_ALL, 'es_ES');
        return view('musculos');
    }
}
