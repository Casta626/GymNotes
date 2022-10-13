<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgrupacionEjercicio extends Model
{
    use HasFactory;



    //** Relaciones */
    public function rutinas(){
        return $this->belongsTo(Rutina::class);
    }

    public function usuarios(){
        return $this->belongsTo(Usuario::class);
    }
}
