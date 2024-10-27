@extends('layouts.plantillanavbar')

@section('titulo', 'procesos')  

@section('contenido')

<section class="py-5" style="background-color: #ffffed; display: flex; justify-content: center; align-items: center; min-height: 100vh;">
    <div class="container" style="max-width: 900px; border: 2px solid #ddd; border-radius: 15px; background-color: white; padding: 40px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="text-secondary mb-4">Proceso</h2>
                <h3 class="mb-5">
                    Reserva <span style="color: #d4a024;">sin complicaciones</span>.
                </h3>
                <ul class="list-unstyled">
                    <li class="mb-4">
                        <i class="fa fa-plane fa-2x" style="color: #00274d;"></i>
                        <strong class="ms-3">Regístrate, escoge un destino y reserva el avión.</strong>
                    </li>
                    <li class="mb-4">
                        <i class="fa fa-hotel fa-2x" style="color: #00274d;"></i>
                        <strong class="ms-3">Escoge tu hotel preferido y agenda tu estadía.</strong>
                    </li>
                    <li>
                        <i class="fa fa-shopping-cart fa-2x" style="color: #00274d;"></i>
                        <strong class="ms-3">Completa la reserva total y disfruta tu viaje.</strong>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('imagenes/Procesos.png') }}" alt="Proceso de reserva" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

@endsection