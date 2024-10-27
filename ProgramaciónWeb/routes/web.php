<?php

use App\Http\Controllers\controladorVistas;
use Illuminate\Support\Facades\Route;


Route::get ('/', [controladorVistas::class, 'inicio'])->name('rutainicio');
Route::get ('/login', [controladorVistas::class, 'login'])->name('rutalogin');
Route::get ('/registro', [controladorVistas::class, 'registro'])->name('rutaregistro');
Route::get ('/servicios', [controladorVistas::class, 'servicios'])->name('rutaservicios');
Route::get ('/procesos', [controladorVistas::class, 'procesos'])->name('rutaprocesos');


// route::view('/login', 'login')->name('login');

// route::view('/registro', 'registro')->name('registro');


