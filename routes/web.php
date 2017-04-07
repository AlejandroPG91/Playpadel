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
    return view('menu/index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('menu','menu\JugadoresController');

Route::get('partidos', function(){
  return view('menu/partidos');
});
Route::get('reservar', function(){
  return view('menu/reserva');
});
Route::get('clases', function(){
  return view('menu/clases');
});
Route::get('torneo', function(){
  return view('menu/torneo');
});
Route::get('tienda', function(){
  return view('menu/tienda');
});
//Route::get('/menu/partidos', 'menu/PartidoController@index');

Route::prefix('admin')->group( function(){
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard'); //name no hace falta, pero es muy bueno a la hora de identificar rutas
});
