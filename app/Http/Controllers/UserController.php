<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsuarios()
    {
        $usuarios = User::with('agrupacionesEjercicios.ejercicioMaquina.serie')->get();
        return response()->json([
            'success' => true,
            'Usuarios' => $usuarios
        ]);

        // Ejercicios = Press banca
        // Ejercicios maquina = cuando haces el ejercicio.
    }


}
