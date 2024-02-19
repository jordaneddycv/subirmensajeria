<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mensajesController;
use App\Http\Controllers\UsuariosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/', [Msg::class, 'inicio']);
// Route::post('/acceder', [Msg::class, 'acceder']);
Route::get('/acceso', [UsuariosController::class, 'acceso']);
Route::get('/login', [UsuariosController::class, 'registrarSesion']);
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/listado', [mensajesController::class, 'mostrarMensajes']);
Route::get('/enviarMensaje', [mensajesController::class, 'enviarMensaje']);