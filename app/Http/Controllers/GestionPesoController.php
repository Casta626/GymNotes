<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionPesoController extends Controller
{

    // https://exafitstore.myshopify.com/blogs/news/cuantas-calorias-necesito-para-volumen-definicion-o-perdida-de-peso#:~:text=HOMBRES%3A%20TMB%20%3D%20(10%20X,edad%20en%20a%C3%B1os)%20%2D%20161.

    public function getGestionPeso(Request $request)
    {
        $datos = [];
        if (isset($request->altura) && isset($request->peso) && isset($request->edad) && isset($request->genero) && ($request->tipoTMB)) {
            $operacionTMB = (10 * $request->peso) + (6.25 * $request->altura) - (5 * $request->edad);

            $genero = [
                'hombre' => +5,
                'mujer'  => -161
            ];


            $operacionGenero = $operacionTMB + $genero[$request->genero];


            $tipoTMB = [
                'Nada' => 1.2,
                'Ligero' => 1.375, // 1-3 dias/semana
                'Moderado' => 1.55, // 3-5 dias/semana
                'Fuerte' => 1.735, // 6-7 dias/semana
                'Muy Fuerte' => 1.9, // dos veces al día, entrenamientos duros
            ];

            $caloriasTMB = round($operacionGenero * $tipoTMB[$request->tipoTMB]);

            $volumen = $caloriasTMB + 300;
            $definicion = $caloriasTMB - 300;

            $datos = [
                'volumen' => $volumen,
                'definicion' => $definicion,
                'caloriasTMB' => $caloriasTMB,
                'operacionTMB' => $operacionTMB,
                'operacionGenero' => $operacionGenero,
            ];
        }
        return view('gestionpeso', ['datos' => $datos]);
        // return $datos;
    }
}
