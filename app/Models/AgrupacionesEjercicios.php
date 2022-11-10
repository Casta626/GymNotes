<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgrupacionesEjercicios extends Model
{
    use HasFactory;

    protected $table = 'agrupaciones_ejercicios';

    //** Relaciones */
    public function rutinas(){
        return $this->belongsTo(Rutina::class);
    }

    public function usuarios(){
        return $this->belongsTo(User::class);
    }

    public function ejercicioMaquina(){
        return $this->hasMany(EjercicioMaquina::class, 'agrupacion_ejercicio_id', 'id');
    }
}
