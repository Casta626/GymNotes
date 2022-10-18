<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musculo extends Model
{
    use HasFactory;

    public function ejercicio(){
        return $this->belongsTo(Ejercicio::class);
    }

    public function musculo(){
        return $this->hasMany(Musculo::class, 'musculo_id', 'id');
    }
}
