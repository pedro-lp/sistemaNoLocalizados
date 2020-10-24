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
    return view('auth.login');
});

Route::resource('datosdesaparecidos', 'DatosDesaparecidoController')->middleware('auth');
Auth::routes();//evita registrar usuarios Auth::routes(['register'=>false]);
//evitar recuperar contraseña del usuarios Auth::routes(['register'=>false,'reset'=>false]);
Route::get('/home', 'DatosDesaparecidoController@index')->name('home');
