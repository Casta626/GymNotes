<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EjercicioMusculo extends Model
{
    use HasFactory;

    protected $table = 'ejercicios_musculos';

    //** Relaciones */
    public function musculo(){
        return $this->belongsTo(Musculo::class);
    }

    public function ejercicio(){
        return $this->belongsTo(Ejercicio::class);
    }

}
