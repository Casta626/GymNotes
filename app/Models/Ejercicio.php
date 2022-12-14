<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    use HasFactory;

    protected $table = 'ejercicios';

    public function musculo(){
        return $this->belongsTo(Musculo::class);
    }
    public function ejercicio_musculo(){
        return $this->hasMany(EjercicioMusculo::class, 'ejercicio_id', 'id');
    }
}
