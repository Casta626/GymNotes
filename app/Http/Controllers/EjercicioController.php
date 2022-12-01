<?php

namespace App\Http\Controllers;

use App\Models\AgrupacionesEjercicios;
use App\Models\Ejercicio;
use App\Models\EjercicioMaquina;
use App\Models\Rutina;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EjercicioController extends Controller
{
    public function index()
    {
        setlocale(LC_ALL, 'es_ES');
        // $agrupaciones_ejercicios = DB::table('agrupaciones_ejercicios')->get();
        $usuarios = User::with('agrupacionesEjercicios')->get();
        $agrupaciones_ejercicios = AgrupacionesEjercicios::with('ejercicioMaquina')->get();
        // $ejercicio_maquina = EjercicioMaquina::with('serie')->get();
        // $rutinas = Rutina::with('agrupacionesEjercicios')->get();
        // return view('ejercicio.index', ['agrupaciones_ejercicios' => $agrupaciones_ejercicios]);
        // dd($usuarios);
        // dd($usuarios);
        return view('ejercicio.index', compact(['usuarios', 'agrupaciones_ejercicios']));
    }

    public function calendario()
    {
        return view('calendario');
    }

    public function getEjercicios()
    {
        $ejercicios = Ejercicio::all();
        return $ejercicios;
    }

    public function postEjercicio(Request $request)
    {
        if ($request->musculo_id) {
            $ejercicio = new Ejercicio();
            $ejercicio->musculo_id = $request->musculo_id;
            $ejercicio->nombre = $request->nombre;
            $ejercicio->descripcion = $request->descripcion;
            $ejercicio->foto = $request->foto;
            $ejercicio->save();
        }
        return $ejercicio;
    }

    public function putEjercicio(Request $request)
    {
        $ejercicio = Ejercicio::find($request->ejercicio_id);

        if ($request->musculo_id) {
            $ejercicio->musculo_id = $request->musculo_id;
            $ejercicio->nombre = $request->nombre;
            $ejercicio->descripcion = $request->descripcion;
            $ejercicio->foto = $request->foto;
            $ejercicio->save();
        }
        return $ejercicio;
    }

    public function deleteEjercicio(Request $request)
    {
        $ejercicio = Ejercicio::find($request->ejercicio_id);
        $ejercicio->delete();
        
        return $ejercicio;
    }

}
