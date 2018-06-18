<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EjercicioModalidad extends Model
{
    protected $fillable = ['id_ejercicio', 'id_modalidad'];

    public function modalidad()
    {
        return $this->BelongsTo('App\modalidad', 'id_modalidad');
    }
    public function ejercicio()
    {
        return $this->BelongsTo('App\ejercicio', 'id_ejercicio');
    }
}
