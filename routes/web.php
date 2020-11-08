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

//Ruta de Bienvenida
Route::get('/', function () {
    return view('principal');
});
//Ruta de Historia del Hotel
Route::get('hotel/historia', function () {
    return view('hotel.historia');
});
//Ruta Mision-Vision
Route::get('hotel/vision', function () {
    return view('hotel.vision');
});
//Ruta Hotel-Ubicacion
Route::get('hotel/ubicacion', function () {
    return view('hotel.ubicacion');
});
//Ruta Servicios Habitaciones
Route::get('servicios/habitaciones', function () {
    return view('servicios.habitaciones');
});
//Ruta Servicios/Eventos => Parametros
Route::get('servicios/eventos/{$id}', function ($id) {
    return view('servicios.eventos', array('id' => $id));
});
//Ruta Reservas
Route::get('reservas/reservas', function () {
    return view('reservas.reservas');
});
//Ruta Contactos
Route::get('contacto', function () {
    return view('contacto');
});


