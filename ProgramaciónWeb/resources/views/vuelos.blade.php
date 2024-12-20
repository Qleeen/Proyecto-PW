@extends('layouts.plantillanavbar')

@section('titulo', 'Reservar Vuelo')

@section('contenido')

<section class="py-5" style="background-color: #ffffed;">
    <div class="container">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <h5 class="sidebar-heading">Borrador</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('rutacuenta')}}">
                                <span style="color: #d4a024;">RESUMEN</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('rutavuelos')}}">
                                <span style="color: #d4a024;">VUELOS</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('rutahospedaje')}}">
                                <span style="color: #d4a024;">HOSPEDAJE</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                    <h1 class="h2">Reservar Vuelo</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <a href="{{route('rutainicio')}}" class="btn btn-sm btn-outline-secondary">Cerrar sesión</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">Vuelo Seleccionado</h5>
                                    <p class="card-text"><strong>Origen:</strong> {{ $vuelo->origen }}</p>
                                    <p class="card-text"><strong>Destino:</strong> {{ $vuelo->destino }}</p>
                                    <p class="card-text"><strong>Salida:</strong> {{ $vuelo->fecha_salida }}</p>
                                    <p class="card-text"><strong>Regreso:</strong> {{ $vuelo->fecha_regreso }}</p>
                                    <p class="card-text"><strong>Aerolínea:</strong> {{ $vuelo->aerolinea_nombre }}</p>
                                    <p class="card-text"><strong>Clase:</strong> {{ $vuelo->clase}}</p>
                                    <p class="card-text"><strong>Asientos Disponibles:</strong> {{ $vuelo->num_pasajeros }}</p>
                                </div>
                            </div>

                            
                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title

                        <div class="col-md-4">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title text-center text-primary">Tu Reservación</h5>
                                    <ul class="list-group list-group-flush mb-4">
                                        <li class="list-group-item d-flex justify-content-between">
                                            <strong>Total del vuelo:</strong>
                                            <span>${{ number_format($vuelo->precio, 2) }} MXN</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between">
                                            <strong>Total a pagar:</strong>
                                            <span>${{ number_format($vuelo->precio, 2) }} MXN</span>
                                        </li>
                                    </ul>
                                    <div class="d-grid">
                                        <a href="{{ route('rutapago', ['vuelo_id' => $vuelo->id]) }}" class="btn btn-primary btn-lg" role="button">Pagar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <!-- Historial de viajes anteriores -->
                    <div class="mt-5">
                        <h3 class="text-secondary">Tus Viajes Anteriores</h3>
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="card shadow-sm h-100">
                                    <img src="{{ asset('imagenes/cancun.jpg') }}" class="card-img-top" alt="viaje anterior" style="width: 100%; height: 200px; object-fit: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title">Cancún, México</h5>
                                        <p class="card-text"><strong>Fecha:</strong> Julio 2020</p>
                                        <p class="card-text"><strong>Vuelo:</strong> A-102 - AeroMéxico</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="card shadow-sm h-100">
                                    <img src="{{ asset('imagenes/japon.jpg') }}" class="card-img-top" alt="viaje anterior" style="width: 100%; height: 200px; object-fit: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title">Tokio, Japón</h5>
                                        <p class="card-text"><strong>Fecha:</strong> Marzo 2021</p>
                                        <p class="card-text"><strong>Vuelo:</strong> M-302 - American Airlines</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="card shadow-sm h-100">
                                    <img src="{{ asset('imagenes/france.jpg') }}" class="card-img-top" alt="viaje anterior" style="width: 100%; height: 200px; object-fit: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title">París, Francia</h5>
                                        <p class="card-text"><strong>Fecha:</strong> Diciembre 2023</p>
                                        <p class="card-text"><strong>Vuelo:</strong> P-789 - Air France</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
        </div> 
    </div> 
</section>

@endsection
