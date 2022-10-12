<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rutinas extends Model
{
    use HasFactory;


    //** Relaciones */
    public function agrupacionesEjercicios(){
        return $this->belongsTo(AgrupacionesEjercicios::class);
    }
}
