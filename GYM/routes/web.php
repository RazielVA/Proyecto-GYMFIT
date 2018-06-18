<?php
use App\Modalidad;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/styletile', function () {
    return view('styletile');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/styletile', 'HomeController@mandarS')->name('styletile');


//raziel
Route::resource('ejercicios','EjercicioController');
Route::resource('rutinaSemanal','RutinaSemanalController');

Route::get('/ejerciciosGru/{id}', function ($id) {
    $nombreG=DB::table('grupos')->where('id',$id)->first();
    $ejercicios = DB::table('ejercicios')->where('id_grupo', $id)->get();
    return view('ejerciciosGru')->with('ejercicios', $ejercicios)->with('nombreG', $nombreG);

});

Route::get('/ejercicio/{id}', function ($id) {
    $ejercicio=DB::table('ejercicios')->where('id',$id)->first();
    return view('ejercicio')->with('ejercicio', $ejercicio);

});
//
//Route::get('/perfil', function () {
//    $usuario = Auth::user();
//    return view('perfil')->with('usuario', $usuario);


//});
Route::get('/filter', function () {
    return view('filter');

});

//Route::get('/modalidad/ejerciciosGrupo/{id}', 'ModalidadController@index')->name('mod');

Route::get('/modalidad/{id}', 'ModalidadController@obtenerEntrenos')->name('mod');
Route::get('/modalidad/nivel/{id_mod}/{nivel}', 'GrupoController@mostrarGrupos')->name('idMod_nivel');
Route::get('/estiramiento', 'EjercicioController@obtenerEstiramientos')->name('est');
//Route::get('modalidad/ejerciciosMod/{id}/{id_mod}', [
//    'as' => 'idMo_idGru',
//    'uses' => 'ModalidadController@mostrarEjerciciosMod',
//]);
Route::get('/modalidad/ejerciciosMod/{id_gru}/{id_mod}/{nivel}', 'EjercicioController@mostrarEjerciciosModNi')->name('idMo_idGru');

Route::get('/rutine/rutinaAle/{id}', 'EjercicioController@generarEjAle')->name('id_rutina_ale');

Route::get('/rutinaPersonalizada','RutinaSemanalController@store')->name('rutinaPersonalizada');

Route::get('/perfil','UsuarioController@obtenerRutinas')->name('perfil');

Route::get('/id_rutina/{id}','RutinaSemanalController@obtenerRutinaEspecifica')->name('id_rutina');


