<?php

use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\validadores;
use Illuminate\Support\Facades\Route;


Route::get ('/', [controladorVistas::class, 'inicio'])->name('rutainicio');
Route::get ('/login', [controladorVistas::class, 'login'])->name('rutalogin');
Route::get ('/registro', [controladorVistas::class, 'registro'])->name('rutaregistro');
Route::get ('/servicios', [controladorVistas::class, 'servicios'])->name('rutaservicios');
Route::get ('/procesos', [controladorVistas::class, 'procesos'])->name('rutaprocesos');
Route::get ('/testimonios', [controladorVistas::class, 'testimonios'])->name('rutatestimonios');



Route::get ('/reservaciones', [controladorVistas::class, 'reservaciones'])->name('rutareservaciones');
Route::get ('/cuenta', [controladorVistas::class, 'cuenta'])->name('rutacuenta');
Route::get ('/asientos', [controladorVistas::class, 'asientos'])->name('rutaasientos');
Route::get ('/hotel', [controladorVistas::class, 'hotel'])->name('rutahotel');
Route::get ('/filtrohotel', [controladorVistas::class, 'filtrohotel'])->name('rutafiltrohotel');
Route::get ('/vuelos', [controladorVistas::class, 'vuelos'])->name('rutavuelos');
Route::get ('/hospedaje', [controladorVistas::class, 'hospedaje'])->name('rutahospedaje');
Route::get ('/informacion', [controladorVistas::class, 'informacion'])->name('rutainformacion');


Route::post('/enviarLogin', [controladorVistas::class, 'procesarLogin'])->name('rutaEnviarLogin');
Route::post('/enviarRegistro', [controladorVistas::class, 'procesarRegistro'])->name('rutaEnviarRegistro');
Route::post('/enviarReservacion', [controladorVistas::class, 'procesarReservacion'])->name('rutaEnviarReservacion');
Route::post('/enviarHotel', [controladorVistas::class, 'procesarHotel'])->name('rutaEnviarHotel');




// route::view('/login', 'login')->name('login');

// route::view('/registro', 'registro')->name('registro');


