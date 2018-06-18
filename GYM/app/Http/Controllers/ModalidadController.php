<?php

namespace App\Http\Controllers;

use App\Grupo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModalidadController extends Controller
{

    public function obtenerEntrenos($id)
    {
        //buscamos los entrenos que pertenezcan a esa modalidad
        $entrenos=DB::table('entrenos')->where('id_modalidad','=',$id)->get();
        return view('modalidad.nivel')->with('entrenos', $entrenos);

    }

}

