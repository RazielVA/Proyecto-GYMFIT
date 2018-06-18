<?php

namespace App\Http\Controllers;

use App\Ejercicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EjercicioController extends Controller
{



    public function generarEjAle($id){

        if($id==1){
            $eBiceps=DB::table('ejercicios')->where('id_grupo',2)->orderByRaw('RAND()')->limit(4)->get();
            $eTriceps=DB::table('ejercicios')->where('id_grupo',3)->orderByRaw('RAND()')->limit(4)->get();
            $eEspalda=DB::table('ejercicios')->where('id_grupo',4)->orderByRaw('RAND()')->limit(4)->get();
            return view('rutinaAle.rutinaTriBiEs')->with('eBiceps', $eBiceps)->with('eTriceps',$eTriceps)->with('eEspalda',$eEspalda)
                ->with('bi','Biceps')->with('tri','Triceps')->with('es','Espalda');
        }else if($id == 2){
            $eAbdomen=DB::table('ejercicios')->where('id_grupo',1)->orderByRaw('RAND()')->limit(4)->get();
            $eHombro=DB::table('ejercicios')->where('id_grupo',5)->orderByRaw('RAND()')->limit(4)->get();
            $ePecho=DB::table('ejercicios')->where('id_grupo',6)->orderByRaw('RAND()')->limit(4)->get();
            return view('rutinaAle.rutinaAbHomPe')->with('eAbdomen', $eAbdomen)->with('eHombro',$eHombro)->with('ePecho',$ePecho)
                ->with('ab','Abdomen')->with('ho','Hombro')->with('pe','Pecho');
        }else{
            $eGemelos=DB::table('ejercicios')->where('id_grupo',2)->orderByRaw('RAND()')->limit(4)->get();
            $eMuslo=DB::table('ejercicios')->where('id_grupo',3)->orderByRaw('RAND()')->limit(4)->get();
            $eGluteos=DB::table('ejercicios')->where('id_grupo',4)->orderByRaw('RAND()')->limit(4)->get();
            return view('rutinaAle.rutinaMusGlu')->with('eGemelos', $eGemelos)->with('eMuslo',$eMuslo)->with('eGluteos',$eGluteos)
                ->with('ge','Gemelos')->with('mu','Muslo')->with('g','Gluteos');
        }
    }


    public function mostrarEjerciciosModNi($id_gru,$id_mod,$nivel){

        //primero obtenemos los ejercicios que pertenecen a ese grupo
        $ejercicios=DB::table('ejercicios')->where('id_grupo','=',$id_gru)->get();
        //obtenemos el entreno depende de la modalidad y el nivel que haya escogido el usuario
        $entreno=DB::table('entrenos')->where('id_modalidad','=',$id_mod)->where('nivel','=',$nivel)->first();
        return view('ejercicios.ejercicios_nivel_mod')->with('ejercicios', $ejercicios)->with('entreno',$entreno);

    }

    public function index()
    {
        $ejercicios = Ejercicio::latest()->paginate(5);
        return view('ejercicios.index',compact('ejercicios'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ejercicios.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'ejercicio' => 'required',
            'imagen' => 'required',
            'explicaion' => 'required',
            'tiempo' => 'required',
            'material' => 'required',
            'posicion' => 'required',
            'consejo' => 'required',
        ]);
        Ejercicio::create($request->all());
        return redirect()->route('ejercicios.index')
            ->with('success','Ejercicio creado correctamente!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ejercicio = Ejercicio::find($id);
        return view('ejercicios.show',compact('ejercicio'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ejercicio = Ejercicio::find($id);
        return view('ejercicios.edit',compact('ejercicio'));
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
        request()->validate([
            'ejercicio' => 'required',
            'imagen' => 'required',
            'explicacion' => 'required',
            'tiempo' => 'required',
            'material' => 'required',
            'posicion' => 'required',
            'consejo' => 'required',
        ]);
        Ejercicio::find($id)->update($request->all());
        return redirect()->route('ejercicios.index')
            ->with('success','Ejercicio actualizado correctamente');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ejercicio::find($id)->delete();
        return redirect()->route('ejercicios.index')
            ->with('success','Ejercicio eliminado');
    }

    public function obtenerEstiramientos(){

        $ejEst=DB::table('ejercicios')->where('id_grupo',13)->get();
        return view('ejercicios.estiramiento')->with('ejEst', $ejEst);
    }

    public function ejerPer(){

        $d = array(
            "lunes" => "",
            "martes" => "",
            "miercoles" => "",
            "jueves" => "",
            "viernes" => "",
            "sabado" => "",
            "domingo" => "",
        );

        if(isset($_GET["lunes"])){
            $d["lunes"]="si";
        }else{
            $d["lunes"]="no";
        }
        if(isset($_GET["martes"])){
            $d["martes"]="si";
        }else{
            $d["martes"]="no";
        }
        if(isset($_GET["miercoles"])){
            $d["miercoles"]="si";
        }else{
            $d["miercoles"]="no";
        }
        if(isset($_GET["jueves"])){
            $d["jueves"]="si";
        }else{
            $d["jueves"]="no";
        }
        if(isset($_GET["viernes"])){
            $d["viernes"]="si";
        }else{
            $d["viernes"]="no";
        }
        if(isset($_GET["sabado"])){
            $d["sabado"]="si";
        }else{
            $d["sabado"]="no";
        }
        if(isset($_GET["domingo"])){
            $d["domingo"]="si";
        }else{
            $d["domingo"]="no";
        }

        $usuario = Auth::user();

        //$d = $_GET["dias"]; Se podria hacer asi ya que nos ahorrariamos mucho codigo, pero yo quiero guardar en la base de datos como "si" o "no"
        $nivel=$_GET["nivel"];
        $modalidad=$_GET["modalidad"];
        //una vez obtenidas las respuestas del usuario hacemos dos consultas a la base de datos
        //La primera para obtener todos los ejercicios segun el nivel que tenga , dependiendo del nivel cogeremos "x" ejercicios
        if($nivel==1) {
            $grupo1=DB::table('ejercicios')->orderByRaw('RAND()')->limit(15)->get();
            $array_texto = json_encode($grupo1);
            $entreno=DB::table('entrenos')->where('id_modalidad','=',$modalidad)->where('nivel','=',$nivel)->first();

//            DB::table('rutina_semanal')->insert(
//                [,'id_usuario' => $usuario["id"], 'ejercicios' =>$array_texto,'lunes'=>$d["lunes"],'martes'=>$d["martes"],'miercoles'=>$d["miercoles"],'jueves'=>$d["jueves"],'viernes'=>$d["viernes"],'sabado'=>$d["sabado"],'domingo'=>$d["domingo"],'repeticiones'=>$entreno["repeticiones"],'serie'=>$entreno["serie"],'peso'=>$entreno["peso"],'nivel'=>"principiante"]
//            );
            DB::table('rutina_semanal')->insert(
                array('id' => 1,'id_usuario' => $usuario["id"], 'ejercicios' =>$array_texto,'lunes'=>$d["lunes"],'martes'=>$d["martes"],'miercoles'=>$d["miercoles"],'jueves'=>$d["jueves"],'viernes'=>$d["viernes"],'sabado'=>$d["sabado"],'domingo'=>$d["domingo"],'repeticiones'=>$entreno["repeticiones"],'serie'=>$entreno["serie"],'peso'=>$entreno["peso"],'nivel'=>"principiante")
            );
            return view('rutinaAle.rutinaSemanal')->with('nivel', $nivel)->with('id_usuario', $usuario["id"])->with('ejercicios', $array_texto)->with('lunes',$d["lunes"]);
        }

        //La segunda para obtener la modalidad
//        return view('rutinaAle.rutinaSemanal')->with('d', $d)->with('nivel', $nivel)->with('modalidad', $modalidad);

    }
}
