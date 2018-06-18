<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $fillable = [
        'grupo',
    ];
    public function ejercicio()
    {
        return $this->hasMany('App\ejercicio', 'grupo_id');
    }
}
