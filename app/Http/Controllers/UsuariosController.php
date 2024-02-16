<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function acceso(){
        return view('templates/header').view('bienvenida').view('templates/footer');
    }

    public function registrarSesion(Request $request){

        $nombre = $request->post('nombre');

        $session = Session();
        $session->put('nombre', $nombre);

    }

}
