@extends('layouts.plantillanavbar')

@section('titulo', 'servicios')  

@section('contenido')


<section class="py-5" style="background-color: #ffffed; justify-content: center; align-items: center; min-height: 100vh;">
    <div class="container text-center">
        <h2 class="text-uppercase text-secondary mb-4">Servicios</h2>
        <h3 class="mb-5">
            ¿<span style="color: #d4a024;">El mejor servicio</span>? nosotros.
        </h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card h-100 p-3">
                    <div class="card-body">
                        <img src="{{ asset('imagenes/Servicios1.png') }}" alt="Icono 1" class="mb-3" style="width: 100px;">
                        <h4 class="card-title" style= "color: #44749d;">Todo en un solo lugar.</h4>
                        <p class="card-text">Nuestro servicio ofrece la reserva del avión y el hotel, ya no necesitas terceros para hacerlo.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 p-3">
                    <div class="card-body">
                        <img src="{{ asset('imagenes/Servicios2.png') }}" alt="Icono 2" class="mb-3" style="width: px;">
                        <h4 class="card-title" style= "color: #44749d;">Sencillo y eficiente.</h4>
                        <p class="card-text">Tan sencillo como registrarte y empezar a reservar tus próximas vacaciones de manera intuitiva y eficiente.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 p-3">
                    <div class="card-body">
                        <img src="{{ asset('imagenes/Servicios3.png') }}" alt="Icono 3" class="mb-3" style="width: 100px;">
                        <h4 class="card-title" style= "color: #44749d;">El mejor precio del mercado.</h4>
                        <p class="card-text">Al ser un servicio integral, no necesitas gastar en tarifas impuestas por otras plataformas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection