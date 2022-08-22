<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::resource('/', 'App\Http\Controllers\SucursalesController');

Route::resource('/categorias', 'App\Http\Controllers\CategoriasController');

Route::resource('/sucursales', 'App\Http\Controllers\SucursalesController');

Route::resource('/productos', 'App\Http\Controllers\ProductosController');
Route::get('/productos/{id}', 'App\Http\Controllers\ProductosController@show');//LISTAR LOS PERSONAJES
Route::get('/productos/{producto}/edit', 'App\Http\Controllers\ProductosController@edit');
Route::put('/productos/{producto}', 'App\Http\Controllers\ProductosController@update')-> name('productos.update');
Route::delete('/productos/{producto}', 'App\Http\Controllers\ProductosController@destroy')-> name('productos.destroy');

Route::get('/contact', 'App\Http\Controllers\ContactController@index');//VISTA PRINCIPAL
Route::post('/contact', ['uses' => 'App\Http\Controllers\ContactController@send', 'as' => 'sendContact']);//VALIDADOR INPUT

Route::get('/help', 'App\Http\Controllers\HelpController@index');

Route::get('/picture/{filename}', 'App\Http\Controllers\SucursalesController@getImagen');//subirImagenes

Route::get('/buscar/{search?}', 'App\Http\Controllers\ProductosController@search');//Buscar