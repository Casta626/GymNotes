<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musculo extends Model
{
    use HasFactory;

    protected $table = 'musculos';

    public function ejercicio(){
        return $this->belongsTo(Ejercicio::class);
    }

    public function musculo(){
        return $this->hasMany(Musculo::class, 'musculo_id', 'id');
    }

    public function ejercicio_musculo(){
        return $this->hasMany(EjercicioMusculo::class, 'musculo_id', 'id');
    }
}
