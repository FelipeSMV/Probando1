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






Route::get("/",['uses' => 'App\Http\Controllers\adminController@inisesion', 'as'=> 'login']);

Route::get("/eliminar",[ 'uses'=>'App\Http\Controllers\productosController@eliminarPro', 'as'=> 'eliminar']);
Route::get("/actualizar",['uses'=> 'App\Http\Controllers\productosController@actualizarPro', 'as'=>'actualizar' ]);
Route::get("/buscar",['uses'=> 'App\Http\Controllers\productosController@buscarPro', 'as'=> 'buscar']);
Route::get("/lista",['uses'=>'App\Http\Controllers\productosController@listarPro', 'as' => 'listar']);
Route::get("/home",['uses' => 'App\Http\Controllers\productosController@registroPro', 'as'=> 'home']);
