<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class productosController extends Controller
{
    public function registroPro(){
        return view('welcome');

    }
    public function listarPro(){
        return view('listar');

    }
    public function buscarPro(){
        return view('consultarP');

    }
    public function actualizarPro(){
        return view('actualizarP');

    }
    public function eliminarPro(){
        return view('eliminarP');

    }

}
