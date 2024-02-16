<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mensajesController extends Controller
{
    public function inicio(){
       return view('templates/header').view('mensajes').view('templates/footer');
    }
    public function acceder(Request $request){
       
        $nombre = $request->post('$nombre');

        $nuevoMensaje = MensajesModel();

    }
}
