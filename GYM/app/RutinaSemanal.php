<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RutinaSemanal extends Model
{
    protected $fillable = [
        'id_usuario','ejercicios','nombre','lunes','martes','miercoles','jueves','viernes','sabado','domingo','repeticiones','serie','peso','nivel',
    ];
}
