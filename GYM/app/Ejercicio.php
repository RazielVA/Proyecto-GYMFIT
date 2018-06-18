<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    protected $fillable = [
        'grupo_id', 'ejercicio', 'imagen', 'explicacion', 'tiempo', 'material', 'posicion', 'consejo',
    ];
    public function grupo()
    {
        return $this->BelongsTo('App\grupo', 'grupo_id');
    }
    public function EjercicioModalidad()
    {
        return $this->hasMany('App\ejerciciomodalidad', 'ejercicio_id');
    }
}
