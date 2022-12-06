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

    public function pruebas()
    {
        $id = 2;
        setlocale(LC_ALL, 'es_ES');
        // $agrupaciones_ejercicios = DB::table('agrupaciones_ejercicios')->get();
        $user = User::find($id);
        $usuarios = $user->with('agrupacionesEjercicios')->get();
        $agrupaciones_ejercicios = AgrupacionesEjercicios::with('ejercicioMaquina')->get();
        // $ejercicio_maquina = EjercicioMaquina::with('serie')->get();
        // $rutinas = Rutina::with('agrupacionesEjercicios')->get();
        // return view('ejercicio.index', ['agrupaciones_ejercicios' => $agrupaciones_ejercicios]);
        // dd($usuarios);
        // dd($usuarios);

        return User::find($id)->agrupaciones_ejercicios()->get();
    }   

    public function postSeries(Request $request)
    {
        $usuario = Auth::id();
        $agrupacion_ejercicio = AgrupacionesEjercicios::where('usuario_id', $usuario)->where('fecha', $request->fecha)->first();
        $ejercicio = Ejercicio::where('nombre', $request->ejercicio)->first();

        $ejercicio_maquina = new EjercicioMaquina();
        $ejercicio_maquina->agrupacion_ejercicio_id = $agrupacion_ejercicio->id;
        $ejercicio_maquina->ejercicio_id = $ejercicio->id;
        $ejercicio_maquina->save();

        // $ej = Ejercicio::where('agrupacion_ejercicio', $agrupacion_ejercicio->id)->where('ejercicio_id', $ejercicio->id)->first();
        
        $serie = new Serie();
        $serie->ejercicio_maquina_id =$ejercicio_maquina->id;
        $serie->save();

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
        $usuarios = User::where('id', $usuario)->with('agrupacionesEjercicios.ejercicioMaquina.serie')->get();
        $ejercicios = Ejercicio::all();
        // $ejercicio_musculo = EjercicioMusculo::with('musculo')->with('ejercicio')->get();

        return view(
            'ejercicio.index',
            ['usuarios' => $usuarios],
            ['ejercicios' => $ejercicios]
            // , ['ejercicio_musculo' => $ejercicio_musculo]
        );
    }

    public function postSerie(Request $request)
    {
        $ejercicioMaquina = $request->ejercicio_maquina_id;
    }

    public function datos()
    {
        $ejercicio_musculo = EjercicioMusculo::with('musculo')->with('ejercicio')->get();

        return $ejercicio_musculo;
    }
}
