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
Route::get('/', function () {
    return view('login');
});

//Ruta Formulario de seleccion
Route::get('/formulario', 'App\Http\Controllers\FormularioController@index')->name('formulario');

//Ruta Informacion extraida
Route::get('/extractor', 'App\Http\Controllers\ExtraccionController@index')->name('extractor');
Auth::routes();

// Ruta para procesar el inicio de sesión
Route::post('/login', 'App\Http\Controllers\AuthController@verifyAccessCode')->name('login');

// Ruta para cerrar sesión
Route::post('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
