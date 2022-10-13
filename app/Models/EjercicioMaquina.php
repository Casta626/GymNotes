<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EjercicioMaquina extends Model
{
    use HasFactory;

    public function agrupacionesEjercicios(){
        return $this->belongsTo(AgrupacionesEjercicios::class);
    }

    public function ejercicio(){
        return $this->belongsTo(Ejercicio::class);
    }

    public function ejercicioMaquina(){
        return $this->hasMany(EjercicioMaquina::class, 'usuario_id', 'id');
    }
}
