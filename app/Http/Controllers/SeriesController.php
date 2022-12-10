<?php

namespace App\Http\Controllers;

use App\Models\AgrupacionesEjercicios;
use App\Models\Ejercicio;
use App\Models\EjercicioMaquina;
use App\Models\EjercicioMusculo;
use App\Models\Serie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPSTORM_META\map;

class SeriesController extends Controller
{

    public function postSeries(Request $request)
    {
        $usuario = Auth::id();
        if ($request->tipo == "new") {

            $agrupacion_ejercicio = AgrupacionesEjercicios::where('usuario_id', $usuario)->where('fecha', $request->fecha)->first();
            $ejercicio = Ejercicio::where('nombre', $request->ejercicio)->first();

            $ejercicio_maquina = new EjercicioMaquina();
            $ejercicio_maquina->agrupacion_ejercicio_id = $agrupacion_ejercicio->id;
            $ejercicio_maquina->ejercicio_id = $ejercicio->id;
            $ejercicio_maquina->save();

            $serie = new Serie();
            $serie->ejercicio_maquina_id = $ejercicio_maquina->id;
            $serie->peso = $request->peso;
            $serie->repeticiones = $request->repeticiones;
            $serie->tiempo_descanso = $request->tiempo_descanso;
            $serie->descripcion = $request->descripcion;
            $serie->save();
        }

        if ($request->tipo == "edit") {
            $serie = Serie::where('id', $request->serie_id)->first();
            $serie->descripcion = $request->descripcion;
            $serie->peso = $request->peso;
            $serie->repeticiones = $request->repeticiones;
            $serie->tiempo_descanso = $request->tiempo_descanso;
            $serie->save();
        }

        if ($request->tipo == "delete"){
            $serie = Serie::where('id', $request->serie_id)->first();
            $serie->delete();
        }


        $usuarios = User::where('id', $usuario)->with('agrupacionesEjercicios.ejercicioMaquina.serie')->get();
        $ejercicios = Ejercicio::all();

        return view(
            'ejercicio.index',
            ['usuarios' => $usuarios],
            ['ejercicios' => $ejercicios]
        );
    }


    public function getSeries()
    {
        $usuario = Auth::id();
        $usuarios = User::where('id', $usuario)
        ->with('agrupacionesEjercicios.ejercicioMaquina.serie')
        ->get();
        $ejercicios = Ejercicio::all();

        return view(
            'ejercicio.index',
            ['usuarios' => $usuarios],
            ['ejercicios' => $ejercicios]
        );
    }
}