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

//RUTAS AUTH DE LARAVEL
Auth::routes(['verify' => true, 'register' => false]);

//VISUALIZAMOS WORPRESS DESDE LARAVEL 

Route::get('/','WordpressController@home');

Route::get('points','WordpressController@points');

Route::get('about','WordpressController@about');

Route::get('contact','WordpressController@contact');



//


//BACKEND LARAVEL

//MOSTRAMOS BACKEND
Route::get('admin', 'backend\BackendController@index')->middleware(['auth']);

Route::get('puntosMapa', 'backend\BackendController@marcas')->middleware(['auth']);

//EMPLEADOS
Route::get('admin/empleados','backend\EmpleadoController@index')->middleware(['auth','admin']);

Route::post('admin/showEmpleados','backend\EmpleadoController@showEmpleados')->middleware(['auth','admin']);

Route::post('createEmpleados', 'backend\EmpleadoController@register')->middleware(['auth','admin']);

Route::get('showEmple/{id}', 'backend\EmpleadoController@edit')->middleware(['auth','admin']);

Route::post('showEmple/{id}', 'backend\EmpleadoController@update')->middleware(['auth','admin']);

Route::delete('EmpleadosDestroy/{id}', 'backend\EmpleadoController@destroy')->middleware(['auth','admin']);


//PUNTOS DE ACCESO
Route::get('admin/puntoAcceso','backend\PuntoAccesoController@index')->middleware(['auth']);

Route::get('showPunto/{id}','backend\PuntoAccesoController@edit')->middleware(['auth']);

Route::post('showPunto/{id}','backend\PuntoAccesoController@update')->middleware(['auth']);

Route::post('admin/showPuntos','backend\PuntoAccesoController@showPuntos')->middleware(['auth']);

Route::post('createPoint', 'backend\PuntoAccesoController@register')->middleware(['auth']);

Route::delete('puntoAccesoBorrar/{id}','backend\PuntoAccesoController@borrar')->middleware(['auth']);

Route::get('showEstadisticas','backend\PuntoAccesoController@showEstadisticas');




//CONEXIONES
Route::get('admin/conexiones','backend\ConexionController@index')->middleware(['auth']);

Route::post('admin/showConexiones','backend\ConexionController@showConexiones')->middleware(['auth']);

Route::delete('ConexionDestroy/{id}', 'backend\ConexionController@destroy')->middleware(['auth']);

Route::get('showConeEstadisticas','backend\ConexionController@showConexionesEstadisticas');


//ACTIVO

Route::get('admin/controlacceso','backend\ActivoController@index')->middleware(['auth']);

Route::get('admin/estado','backend\ActivoController@estado')->middleware(['auth']);

Route::post('admin/showActivo','backend\ActivoController@showActivo')->middleware(['auth']);

Route::post('admin/updateActivo', 'backend\ActivoController@update')->middleware(['auth']);





//GRAFICOS Y DATOS ADICIONALES
Route::get('datos','backend\BackendController@datos')->middleware(['auth']);

Route::get('showModelos','backend\PuntoAccesoController@showModelos');