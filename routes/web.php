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


Auth::routes();

Route::resource('/servicio', 'ServicioController');
Route::resource('/categoria', 'CategoriaController');
Route::resource('/area', 'AreaController');
Route::resource('/monitoreo', 'MonitoreoController');
Route::resource('/incidencia', 'IncidenciaController');
Route::resource('/seguimientoIncidencia', 'SeguimientoController');
Route::resource('/Reporte', 'GenerarrepControlador');
Route::resource('/careers', 'IncidenciaController@getCareers');


Route::get('/', 'Pagecontroller@inicio');

//Route::get('servicio', 'Pagecontroller@regservi')->name('servicio');
//Route::get('incidencia', 'Pagecontroller@regincidente')->name('incidencia');
//Route::get('seguimientoIncidencia', 'Pagecontroller@seguimiento' )->name('seguimientoinc');
//Route::get('categoria', 'Pagecontroller@categoria' )->name('categoria');
//Route::get('area', 'Pagecontroller@area' )->name('area');

//Route::post('/', 'Pagecontroller@crearcategoria')->name('servicio.crearcateg');
//Route::post('crearserv', 'Pagecontroller@crearservicio')->name('servicio.crearservicio');
//Route::post('creararea', 'Pagecontroller@creararea')->name('servicio.creararea');

Route::get('/home', 'IncidenciaController@index')->name('home');



