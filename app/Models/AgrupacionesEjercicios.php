<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgrupacionesEjercicios extends Model
{
    use HasFactory;



    //** Relaciones */
    public function rutinas(){
        return $this->hasMany(Rutinas::class);
    }

    public function usuarios(){
        return $this->hasMany(Usuarios::class);
    }
}
