<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rutina extends Model
{
    use HasFactory;

    protected $table = 'rutinas';


    //** Relaciones */
    public function agrupacionesEjercicios(){
        return $this->hasMany(AgrupacionesEjercicios::class, 'rutina_id', 'id');
    }
}
