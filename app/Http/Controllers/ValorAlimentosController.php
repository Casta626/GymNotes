<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ValorAlimentosController extends Controller
{
    public function index() 
    {

        $valor_alimentos = DB::table('valor_alimentos')->get();
        return view('valor_alimentos.index', ['valor_alimentos' => $valor_alimentos]);
    }
}
