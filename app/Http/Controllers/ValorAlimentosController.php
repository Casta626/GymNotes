<?php

namespace App\Http\Controllers;

use App\Models\ValorAlimento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ValorAlimentosController extends Controller
{
    public function index() 
    {

        $valor_alimentos = DB::table('valor_alimentos')->get();
        return view('valor_alimentos.index', ['valor_alimentos' => $valor_alimentos]);
    }

    public function getValorAlimentos(Request $request) 
    {
        $valor_alimento = ValorAlimento::where('alimento_id', $request->alimento_id)->first();
        return view('valor_alimentos.index', ['valor_alimento' => $valor_alimento]);
        // return $valor_alimento;
    }
}
