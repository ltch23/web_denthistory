<?php

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

/*Route::get('/template', function () {
    return view('template');
});
*/
//Auth::routes();

//Route::get('/', 'HomeController@index');
Route::post('/registrar', 'UserController@registrar');
Route::post('/logear', 'UserController@login');
Route::get('/register', 'AuthController@register');
Route::get('/', 'AuthController@index');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/inicio', function () {
        return view('paciente/inicio');
    });
    Route::get('/perfil', 'UserController@index');
    Route::post('/guardar_perfil', 'UserController@save');

    Route::get('/historial', 'HistoriasController@index');
    Route::get('/detalle/{id}/{id_doctor}','HistoriasController@verDetalle');

    Route::get('/agregar_historia/{id}','HistoriasController@ver');
    Route::post('/guardar_historia/{id}', 'HistoriasController@save');

    Route::get('/autorizar', 'AutorizacionesController@index');
    Route::post('/nuevo_auto', 'AutorizacionesController@crear');
    
   // Route::get('/pacientes', 'UserController@show_pac');
    
    Route::get('/odontograma', 'OdontogramaController@index');

    /*Rutas del Doctor*/
    Route::get('/inicio_doc', function () {
        return view('doctor/inicio');
    });

    Route::get('/perfil_doc', 'UserController@index_doc');
    Route::post('/guardar_perfil_doc', 'UserController@save');
    
    Route::get('/pacientes', 'AutorizacionesController@index_doc');
    Route::get('/historia_paciente/{id}','HistoriasController@historia_pac');
    Route::get('/logout', 'AuthController@logout');

});