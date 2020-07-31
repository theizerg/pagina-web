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

/*Route::get('/', function () {
    return view('test');
});
*/ 
Route::get('/', 'TestController@welcome');

  Route::resource('comentarios', 'ComentarioController');
Auth::routes();
 
Route::middleware(['auth',])->group(function () {

  
  Route::get('home', 'HomeController@index')->name('home');
  Route::get('user-autocomplete', 'UserController@autocomplete');

  Route::resource('user',      'UserController');//
  Route::resource('menus',     'MenuController');//
  Route::resource('header',    'HeadersController');//
  Route::resource('logins',    'LoginController');//
  Route::resource('permission','PermissionController');
  //Route::resource('equipo','    EquipoController');
  Route::resource('objetivo',  'ObjetivoController');//
  Route::resource('estructura',  'OptionController');// 
  Route::resource('donacion',  'DonacionesController');//
  Route::resource('donaciones','OptionDonacionesController'); 
  Route::resource('proyecto',  'ProyectoController');//
  Route::resource('proyectos','OptionProyectoController');//
  Route::resource('somos',    'SomosController');//
  Route::resource('personas', 'PersonaController');
});
