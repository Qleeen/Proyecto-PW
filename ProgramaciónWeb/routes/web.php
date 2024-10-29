<?php

use App\Http\Controllers\controladorVistas;
use Illuminate\Support\Facades\Route;


Route::get ('/', [controladorVistas::class, 'inicio'])->name('rutainicio');
Route::get ('/login', [controladorVistas::class, 'login'])->name('rutalogin');
Route::get ('/registro', [controladorVistas::class, 'registro'])->name('rutaregistro');
Route::get ('/servicios', [controladorVistas::class, 'servicios'])->name('rutaservicios');
Route::get ('/procesos', [controladorVistas::class, 'procesos'])->name('rutaprocesos');
Route::get ('/testimonios', [controladorVistas::class, 'testimonios'])->name('rutatestimonios');

Route::post('/enviarCliente', [controladorVistas::class, 'procesarClientes'])->name('rutaEnviar');

Route::get ('/reservaciones', [controladorVistas::class, 'reservaciones'])->name('rutareservaciones');
Route::get ('/cuenta', [controladorVistas::class, 'cuenta'])->name('rutacuenta');
Route::get ('/asientos', [controladorVistas::class, 'asientos'])->name('rutaasientos');


// route::view('/login', 'login')->name('login');

// route::view('/registro', 'registro')->name('registro');


