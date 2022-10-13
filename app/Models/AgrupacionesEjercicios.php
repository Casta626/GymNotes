<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgrupacionesEjercicios extends Model
{
    use HasFactory;



    //** Relaciones */
    public function rutinas(){
        return $this->belongsTo(Rutina::class);
    }

    public function usuarios(){
        return $this->belongsTo(Usuario::class);
    }

    public function ejercicioMaquina(){
        return $this->hasMany(EjercicioMaquina::class, 'usuario_id', 'id');
    }
}
