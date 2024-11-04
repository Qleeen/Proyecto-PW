@extends('layouts.plantillanavbar')

@section('titulo', 'vuelos')

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
                <h1 class="h2">Hospedaje</h1>
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
                                <h5 class="card-title text-primary">Vuelo</h5>
                                <p class="card-text"><strong>No. de Vuelo:</strong> A-502</p>
                                <p class="card-text"><strong>Aerolínea:</strong> AeroMéxico</p>
                                <p class="card-text"><strong>Duración:</strong> 15 horas</p>
                                <p class="card-text"><strong>Asientos seleccionados:</strong> A24, B24</p>
                            </div>
                        </div>

                        <div class="card mb-4 shadow-sm">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('imagenes/concan.jpg') }}" class="img-fluid rounded-start" alt="Hotel Image">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-primary">Concán, Texas, USA.</h5>
                                        <p class="card-text mb-1"><strong>Calificación:</strong> 9.7</p>
                                        <p class="card-text mb-1"><strong>Precio:</strong> $3,664 MXN noche</p>
                                        <p class="card-text mb-1"><strong>Estrellas:</strong> ★★★★☆</p>
                                        <p class="card-text"><strong>Disponibilidad de habitaciones:</strong> 5</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title text-center text-primary">Tu Reservación</h5>
                                <ul class="list-group list-group-flush mb-4">
                                    <li class="list-group-item d-flex justify-content-between"><strong>Total del Hotel:</strong> <span>$10,992 MXN</span></li>
                                    <li class="list-group-item d-flex justify-content-between"><strong>Total a pagar:</strong> <span>$10,992 MXN</span></li>
                                </ul>
                                <div class="d-grid">
                                <a href="{{ route('rutapago') }}" class="btn btn-primary btn-lg" role="button">Pagar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 

<!-- historial de viajes anteriores -->
                <div class="mt-5">
                    <h3 class="text-secondary">Tus Reservaciones Anteriores</h3>
                    <div class="row">

                        <div class="col-md-4 mb-4">
                            <div class="card shadow-sm h-100">
                                <img src="{{ asset('imagenes/paradisus.jpg') }}" class="card-img-top" alt="viaje anterior" style="width: 100%; height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title">Cancún, México</h5>
                                    <p class="card-text"><strong>Fecha:</strong> Julio 2023</p>
                                    <p class="card-text"><strong>Hotel:</strong> Hotel Paradisus</p>
                                    <p class="card-text mb-1"><strong>Estrellas:</strong> ★★★★☆</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="card shadow-sm h-100">
                                <img src="{{ asset('imagenes/GPHT.avif') }}" class="card-img-top" alt="viaje anterior" style="width: 100%; height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title">Tokio, Japon</h5>
                                    <p class="card-text"><strong>Fecha:</strong> Marzo 2023</p>
                                    <p class="card-text"><strong>Hotel:</strong> Grand Prince Hotel Takanawa</p>
                                    <p class="card-text mb-1"><strong>Estrellas:</strong> ★★☆</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="card shadow-sm h-100">
                                <img src="{{ asset('imagenes/meurice.jpg') }}" class="card-img-top" alt="viaje anterior" style="width: 100%; height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title">París, Francia</h5>
                                    <p class="card-text"><strong>Fecha:</strong> Diciembre 2022</p>
                                    <p class="card-text"><strong>Hotel:</strong> Le Meurice</p>
                                    <p class="card-text mb-1"><strong>Estrellas:</strong> ★★★★★</p>
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
