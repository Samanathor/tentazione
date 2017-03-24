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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/test', function(){
	return view('panel');
});
Route::get('/completado', function(){
	return view('confirm');
});
Route::get('/proveedores', function(){
	return view('provedores');
});
Route::get('/test4', function(){
	return view('chat');
});

Route::post('/anadir-cita', 'ClienteController@createCita');


