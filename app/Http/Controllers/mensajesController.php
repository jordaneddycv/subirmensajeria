<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mensajesController extends Controller
{
    // public function inicio(){
    //    return view('templates/header').view('mensajes').view('templates/footer');
    // }
    // public function acceder(Request $request){
       
    //     $nombre = $request->post('$nombre');

    //     $nuevoMensaje = MensajesModel();

    // }
    public function mostrarMensajes(){
        return view('templates/header')
        .view('listadoMensajes')
        .view('templates/footer');
    }

    public function enviarMensaje(){
        $texto = $_GET['mensajeEnvio'];
        echo $texto;
    }
}
