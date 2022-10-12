<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MusculosController extends Controller
{
    public function index() 
    {
        setlocale(LC_ALL, 'es_ES');
        $musculos = DB::table('musculos')->get();
        return view('musculo.index', ['musculos' => $musculos]);
    }
}
