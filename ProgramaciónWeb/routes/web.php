<?php

use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\clienteController;
use App\Http\Controllers\hotelController;
use App\Http\Controllers\vuelosController;
use App\Http\Controllers\VueloController;
use App\Http\Controllers\validadores;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReporteHotelController;


Route::get ('/', [controladorVistas::class, 'inicio'])->name('rutainicio');
Route::get ('/login', [controladorVistas::class, 'login'])->name('rutalogin');
// Route::get ('/registro', [controladorVistas::class, 'registro'])->name('rutaregistro');
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
Route::get ('/pago', [controladorVistas::class, 'pago'])->name('rutapago');







Route::post('/enviarLogin', [controladorVistas::class, 'procesarLogin'])->name('rutaEnviarLogin');
Route::post('/enviarRegistro', [controladorVistas::class, 'procesarRegistro'])->name('rutaEnviarRegistro');
Route::post('/enviarReservacion', [controladorVistas::class, 'procesarReservacion'])->name('rutaEnviarReservacion');
Route::post('/enviarHotel', [controladorVistas::class, 'procesarHotel'])->name('rutaEnviarHotel');
Route::post('/enviarPago', [controladorVistas::class, 'procesarPago'])->name('rutaEnviarPago');

//cerrar sesion
Route::post('/logout', [clienteController::class, 'logout'])->name('logout');





//ruta admin
Route::get('/clientesConsulta', [clienteController::class, 'index'])->name('rutaclientes');
Route::get('/hotelConsulta', [hotelController::class, 'index'])->name('rutahotelConsulta');
Route::get('/vuelosConsulta', [vuelosController::class, 'index'])->name('rutavuelosConsulta');


//controlador del cliente
Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutaregistro');


Route::post('/cliente', [clienteController::class, 'store'])->name('enviaregistro');

//actualizar cliente
Route::get('/cliente/{id}/edit', [clienteController::class, 'edit'])->name('rutaEditarCliente');
Route::put('/cliente/{id}/update', [clienteController::class, 'update'])->name('rutaActualizarCliente');
//eliminar cliente
Route::delete('/cliente/{id}', [clienteController::class, 'destroy'])->name('rutaEliminarCliente');

Route::post('/enviarLogin', [clienteController::class, 'enviarLogin'])->name('enviarLogin');


//hoteles

Route::get('/hotel/create', [hotelController::class, 'create'])->name('rutaHotelRegistro');
Route::delete('/hotel/{id}', [hotelController::class, 'destroy'])->name('rutaEliminarHotel');
Route::get('/hotel/{id}/edit', [hotelController::class, 'edit'])->name('rutaEditarHotel');
Route::put('/hotel/{id}/update', [hotelController::class, 'update'])->name('rutaActualizarHotel');
Route::post('/hotel', [hotelController::class, 'store'])->name('enviarHotel');



//vuelos
Route::get('/vuelo/create', [vuelosController::class, 'create'])->name('rutaVueloRegistro');
Route::delete('/vuelo/{id}', [vuelosController::class, 'destroy'])->name('rutaEliminarVuelo');
Route::get('/vuelo/{id}/edit', [vuelosController::class, 'edit'])->name('rutaEditarVuelo');
Route::put('/vuelo/{id}/update', [vuelosController::class, 'update'])->name('rutaActualizarVuelo');
Route::post('/vuelo', [vuelosController::class, 'store'])->name('enviarVuelo');


//reservacion 
Route::get('/vuelos/{id}', [VueloController::class, 'mostrarVuelo'])->name('rutamostrarvuelos');

//buscarvuelos
Route::get('/buscar-vuelos', [VueloController::class, 'buscarVuelos'])->name('buscarVuelos');
Route::get('/reservar-vuelo/{id}', [VueloController::class, 'reservarVuelo'])->name('reservarVuelo');



//PDF y EXCEL

Route::get('/reportes/clientes/pdf', [clienteController::class, 'exportClientesPDF'])->name('clientes.pdf');
Route::get('/reportes/clientes/excel', [clienteController::class, 'exportClientesExcel'])->name('clientes.excel');
Route::get('/hoteles/exportar-excel', [ReporteHotelController::class, 'exportarExcel'])->name('exportarHotelesExcel');
Route::get('/hoteles/exportar-pdf', [ReporteHotelController::class, 'exportarPdf'])->name('exportarHotelesPdf');


//verify
Route::get('/verify-email/{id}/{hash}', [clienteController::class, 'verifyEmail'])->name('verify.email');
