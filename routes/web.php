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



Route::get('/login', function () {
    return view('login');
});
Route::get('/home', function () {
    return view('welcome');
});
Route::get('/eliminar', function () {
    return view('eliminarP');
});
Route::get('/actualizar', function () {
    return view('actualizarP');
});
Route::get('/consultar', function () {
    return view('consultarP');
});
Route::get('/lista', function () {
    return view('listar');
});
