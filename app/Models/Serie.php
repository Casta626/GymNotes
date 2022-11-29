<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;
    
    protected $table = 'series';

    public function ejercicioMaquina()
    {
        return $this->belongsTo(EjercicioMaquina::class);
    }

    public function series()
    {
        return $this->hasManyThrough(
            User::class,
            AgrupacionesEjercicios::class,
            EjercicioMaquina::class,
            Serie::class,
            'created_at', // Foreign key on the environments table...
            'usuario_id', // Foreign key on the deployments table...
            'peso', // Local key on the projects table...
            'id' // Local key on the environments table...
        );
    }

    public  function getMusculosByEjercicio(){
        
    }
    
}
