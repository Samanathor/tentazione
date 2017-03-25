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


Route::get('/citas', function(){

	 if (Auth::check())
        {
	return view('panel');
		}
		else
		{
    return view('index');
		}	
});
Route::get('/completado', function(){
	 if (Auth::check())
        {
	return view('confirm');
		}
		else
		{
    return view('index');
		}
});
Route::get('/proveedores', function(){
	 if (Auth::check())
        {
	return view('provedores');
		}
		else
		{
    return view('index');
		}
});
Route::get('/chat', function(){
	 if (Auth::check())
        {

      $emailuser = Auth::user()->email; 
      $passwuser = Auth::user()->password; 

	return view('chat.index', [
    	'email' => $emailuser,
    	'password' => $passwuser,
		]);

		}
		else
		{
    return view('index');
		}
});

Route::post('/anadir-cita', 'ClienteController@createCita');


