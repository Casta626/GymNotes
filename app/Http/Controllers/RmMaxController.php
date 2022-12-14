<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RmMaxController extends Controller
{
    const REPS = [1, 0.95, 0.90, 0.86, 0.82, 0.78, 0.74, 0.70, 0.65, 0.61, 0.57, 0.53 ];

    public function rmCalculator(Request $request)
    {
        //https://www.vitonica.com/entrenamiento/como-calcular-los-porcentajes-de-cargas-submaximas
        // https://echarts.apache.org/
        // https://www.youtube.com/watch?v=wkui8RT5mFQ

        $resultados = [];
        if (isset($request->rep) && isset($request->peso)){
        $reps = RmMaxController::REPS;
        
        $valor = $reps[$request->rep - 1];
        $rm = $request->peso;
        $rmMax = $rm/$valor;

        
        
        for ($i=0; $i < count($reps); $i++){
            $calculadora = number_format((float)$rmMax * $reps[$i], 2, ',', '');
            array_push($resultados, $calculadora);
        }
    }
        
        return view('rm_max.index', ['resultados' => $resultados]);
    }
}