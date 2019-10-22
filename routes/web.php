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

Route::get('/', function () {
    return view('welcome');
});

Route::get('monitoreo', function () {
    
})->name('monitoreo');
Route::get('/', 'Pagecontroller@inicio');
Route::get('RegistrarUser', 'Pagecontroller@reguser');
Route::get('servicio', 'Pagecontroller@regservi')->name('servicio');
Route::get('incidencia', 'Pagecontroller@regincidente')->name('incidencia');
Route::get('seguimientoIncidencia', 'Pagecontroller@seguimiento' )->name('seguimientoinc');
Route::get('categoria', 'Pagecontroller@categoria' )->name('categoria');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
