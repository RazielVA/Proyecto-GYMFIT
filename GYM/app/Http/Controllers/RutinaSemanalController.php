<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\RutinaSemanal;

class RutinaSemanalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rutinaSemanal= new RutinaSemanal();
        $d = array(
            "lunes" => "",
            "martes" => "",
            "miercoles" => "",
            "jueves" => "",
            "viernes" => "",
            "sabado" => "",
            "domingo" => "",
        );

        if(isset($request["lunes"])){
            $d["lunes"]="si";
        }else{
            $d["lunes"]="no";
        }
        if(isset($request["martes"])){
            $d["martes"]="si";
        }else{
            $d["martes"]="no";
        }
        if(isset($request["miercoles"])){
            $d["miercoles"]="si";
        }else{
            $d["miercoles"]="no";
        }
        if(isset($request["jueves"])){
            $d["jueves"]="si";
        }else{
            $d["jueves"]="no";
        }
        if(isset($request["viernes"])){
            $d["viernes"]="si";
        }else{
            $d["viernes"]="no";
        }
        if(isset($request["sabado"])){
            $d["sabado"]="si";
        }else{
            $d["sabado"]="no";
        }
        if(isset($request["domingo"])){
            $d["domingo"]="si";
        }else{
            $d["domingo"]="no";
        }


        $diasUsuario = array();
        $usuario = Auth::user();
        $descanso = array("ejercicio"=>"Descanso");
        $aux=array();
        $aux[0]=$descanso;


        //$d = $_GET["dias"]; Se podria hacer asi ya que nos ahorrariamos mucho codigo, pero yo quiero guardar en la base de datos como "si" o "no"
        $nivel=$request["nivel"];
        $modalidad=$request["modalidad"];
        $nomRutina=$request["nombre"];
        //una vez obtenidas las respuestas del usuario hacemos dos consultas a la base de datos
        //La primera para obtener todos los ejercicios segun el nivel que tenga , dependiendo del nivel cogeremos "x" ejercicios
        if($nivel==3) {
            $ejDia1 = DB::table('ejercicios')->where("id_grupo",6)->orWhere("id_grupo",3)->orWhere("id_grupo",5)->orderByRaw('RAND()')->limit(4)->get();
            $ejDia2 = DB::table('ejercicios')->where("id_grupo",4)->orWhere("id_grupo",2)->orWhere("id_grupo",5)->orderByRaw('RAND()')->limit(5)->get();
            $ejDia3 = DB::table('ejercicios')->where("id_grupo",7)->orWhere("id_grupo",1)->orderByRaw('RAND()')->limit(6)->get();

            $entreno = DB::table('entrenos')->where('id_modalidad', '=', $modalidad)->where('nivel', '=', $nivel)->first();
            //cogemos solo los dias que tiene que entrenar
            $contD=1;
            foreach ($d as $key =>$value){
                if($d[$key]=="si" && $contD==1){
                    $diasUsuario[$key]=$ejDia1;
                    $contD++;
                }else if ($d[$key]=="si" && $contD==2){
                    $diasUsuario[$key]=$ejDia2;
                    $contD++;
                }else if ($d[$key]=="si" && $contD==3){
                    $diasUsuario[$key]=$ejDia3;
                    $contD++;
                }else{
                    $diasUsuario[$key]=json_encode($aux);
                }
            }
            $rutinaSemanal->id_usuario=$usuario["id"];
            $rutinaSemanal->nombre=$nomRutina;
            $rutinaSemanal->lunes=$diasUsuario["lunes"];
            $rutinaSemanal->martes=$diasUsuario["martes"];
            $rutinaSemanal->miercoles=$diasUsuario["miercoles"];
            $rutinaSemanal->jueves=$diasUsuario["jueves"];
            $rutinaSemanal->viernes=$diasUsuario["viernes"];
            $rutinaSemanal->sabado=$diasUsuario["sabado"];
            $rutinaSemanal->domingo=$diasUsuario["domingo"];
            $rutinaSemanal->repeticiones=$entreno->repeticiones;
            $rutinaSemanal->serie=$entreno->serie;
            $rutinaSemanal->peso=$entreno->peso;
            $rutinaSemanal->nivel="Principiante";
            $rutinaSemanal->save();
            return redirect()->back();

        }else if($nivel==2){
            $ejDia1 = DB::table('ejercicios')->where("id_grupo",6)->orWhere("id_grupo",3)->orWhere("id_grupo",5)->orderByRaw('RAND()')->limit(4)->get();
            $ejDia2 = DB::table('ejercicios')->where("id_grupo",4)->orWhere("id_grupo",2)->orWhere("id_grupo",5)->orderByRaw('RAND()')->limit(5)->get();
            $ejDia3 = DB::table('ejercicios')->where("id_grupo",7)->orWhere("id_grupo",1)->orderByRaw('RAND()')->limit(6)->get();
            $ejDia4 = DB::table('ejercicios')->where("id_grupo",4)->orWhere("id_grupo",2)->orWhere("id_grupo",5)->orderByRaw('RAND()')->limit(5)->get();

            $entreno = DB::table('entrenos')->where('id_modalidad', '=', $modalidad)->where('nivel', '=', $nivel)->first();
            //cogemos solo los dias que tiene que entrenar
            $contD=1;
            foreach ($d as $key =>$value){
                if($d[$key]=="si" && $contD==1){
                    $diasUsuario[$key]=$ejDia1;
                    $contD++;
                }else if ($d[$key]=="si" && $contD==2){
                    $diasUsuario[$key]=$ejDia2;
                    $contD++;
                }else if ($d[$key]=="si" && $contD==3){
                    $diasUsuario[$key]=$ejDia3;
                    $contD++;
                }
                else if ($d[$key]=="si" && $contD==4){
                    $diasUsuario[$key]=$ejDia4;
                    $contD++;
                }else{
                    $diasUsuario[$key]=json_encode($aux);
                }
            }
            $rutinaSemanal->id_usuario=$usuario["id"];
            $rutinaSemanal->nombre=$nomRutina;
            $rutinaSemanal->lunes=$diasUsuario["lunes"];
            $rutinaSemanal->martes=$diasUsuario["martes"];
            $rutinaSemanal->miercoles=$diasUsuario["miercoles"];
            $rutinaSemanal->jueves=$diasUsuario["jueves"];
            $rutinaSemanal->viernes=$diasUsuario["viernes"];
            $rutinaSemanal->sabado=$diasUsuario["sabado"];
            $rutinaSemanal->domingo=$diasUsuario["domingo"];
            $rutinaSemanal->repeticiones=$entreno->repeticiones;
            $rutinaSemanal->serie=$entreno->serie;
            $rutinaSemanal->peso=$entreno->peso;
            $rutinaSemanal->nivel="Intermedio";
            $rutinaSemanal->save();
            return redirect()->back();

        }else if ($nivel==1){
            $ejDia1 = DB::table('ejercicios')->where("id_grupo",6)->orWhere("id_grupo",3)->orWhere("id_grupo",5)->orderByRaw('RAND()')->limit(4)->get();
            $ejDia2 = DB::table('ejercicios')->where("id_grupo",4)->orWhere("id_grupo",2)->orWhere("id_grupo",5)->orderByRaw('RAND()')->limit(3)->get();
            $ejDia3 = DB::table('ejercicios')->where("id_grupo",1)->orWhere("id_grupo",1)->orderByRaw('RAND()')->limit(4)->get();
            $ejDia4 = DB::table('ejercicios')->where("id_grupo",7)->orWhere("id_grupo",1)->orderByRaw('RAND()')->limit(5)->get();
            $ejDia5= DB::table('ejercicios')->where("id_grupo",3)->orWhere("id_grupo",5)->orderByRaw('RAND()')->limit(4)->get();
            $ejDia6 = DB::table('ejercicios')->where("id_grupo",7)->orWhere("id_grupo",1)->orderByRaw('RAND()')->limit(4)->get();

            $entreno = DB::table('entrenos')->where('id_modalidad', '=', $modalidad)->where('nivel', '=', $nivel)->first();
            //cogemos solo los dias que tiene que entrenar
            $contD=1;
            foreach ($d as $key =>$value){
                if($d[$key]=="si" && $contD==1){
                    $diasUsuario[$key]=$ejDia1;
                    $contD++;
                }else if ($d[$key]=="si" && $contD==2){
                    $diasUsuario[$key]=$ejDia2;
                    $contD++;
                }else if ($d[$key]=="si" && $contD==3){
                    $diasUsuario[$key]=$ejDia3;
                    $contD++;
                }else if ($d[$key]=="si" && $contD==4){
                    $diasUsuario[$key]=$ejDia4;
                    $contD++;
                }
                else if ($d[$key]=="si" && $contD==5){
                    $diasUsuario[$key]=$ejDia5;
                    $contD++;
                }else if ($d[$key]=="si" && $contD==6){
                    $diasUsuario[$key]=$ejDia6;
                    $contD++;
                }else{
                    $diasUsuario[$key]=json_encode($aux);
                }
            }
            $rutinaSemanal->id_usuario=$usuario["id"];
            $rutinaSemanal->nombre=$nomRutina;
            $rutinaSemanal->lunes=$diasUsuario["lunes"];
            $rutinaSemanal->martes=$diasUsuario["martes"];
            $rutinaSemanal->miercoles=$diasUsuario["miercoles"];
            $rutinaSemanal->jueves=$diasUsuario["jueves"];
            $rutinaSemanal->viernes=$diasUsuario["viernes"];
            $rutinaSemanal->sabado=$diasUsuario["sabado"];
            $rutinaSemanal->domingo=$diasUsuario["domingo"];
            $rutinaSemanal->repeticiones=$entreno->repeticiones;
            $rutinaSemanal->serie=$entreno->serie;
            $rutinaSemanal->peso=$entreno->peso;
            $rutinaSemanal->nivel="Avanzado";
            $rutinaSemanal->save();

            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RutinaSemanal::find($id)->delete();
        return redirect()->route('perfil')
            ->with('success','La rutina ha sido eliminada');
    }

    public function obtenerRutinaEspecifica($id){
        $rutina=DB::table('rutina_semanals')->where('id','=',$id)->first();
        $ejercicios=DB::table('rutina_semanals')->where('id','=',$id)->first();
        $ejLunes = json_decode($ejercicios->lunes,true);
        $ejMartes = json_decode($ejercicios->martes,true);
        $ejMiercoles = json_decode($ejercicios->miercoles,true);
        $ejJueves = json_decode($ejercicios->jueves,true);
        $ejViernes = json_decode($ejercicios->viernes,true);
        $ejSabado = json_decode($ejercicios->sabado,true);
        $ejDomingo = json_decode($ejercicios->domingo,true);
        return view("rutinaAle.rutinaSemanal")->with("rutina",$rutina)->with("ejLunes",$ejLunes)->with("ejMartes",$ejMartes)->with("ejMiercoles",$ejMiercoles)
            ->with("ejJueves",$ejJueves)->with("ejViernes",$ejViernes)->with("ejSabado",$ejSabado)->with("ejDomingo",$ejDomingo);
    }
}
