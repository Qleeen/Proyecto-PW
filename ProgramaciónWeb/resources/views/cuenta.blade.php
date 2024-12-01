@extends('layouts.plantillanavbar')

@section('titulo', 'Login')

@section('contenido')
<section class="vh-100" style="background-color: #ffffed;">
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <h5 class="sidebar-heading">Borrador</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('rutacuenta') }}">
                                <span style="color: #d4a024;">RESUMEN</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('rutavuelos') }}">
                                <span style="color: #d4a024;">VUELOS</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('rutahospedaje') }}">
                                <span style="color: #d4a024;">HOSPEDAJE</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <!-- Header -->
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                    <h1 class="h2">Resumen</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-outline-secondary">Cerrar sesión</button>
                        </form>
                    </div>
                </div>

                <!-- Statistics Section -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Gastos en el último mes</h5>
                                <p class="card-text">$192.1k</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Viajes realizados</h5>
                                <p class="card-text">1340</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Reservaciones</h5>
                                <p class="card-text">3543</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Charts Section -->
                <div class="row">
                    <div class="col-md-6">
                        <h5>Órdenes por mes:</h5>
                        <!-- Puedes agregar un gráfico aquí -->
                    </div>
                    <div class="col-md-6">
                        <h5>Total de vuelos en el último año:</h5>
                        <!-- Puedes agregar un gráfico aquí -->
                    </div>
                </div>

                <!-- History Section -->
                <div class="mt-5">
                    <h3 class="text-secondary">Historial</h3>
                    <div class="row">
                        <div class="carousel slide mt-4">
                            <div class="carousel-inner">
                                <!-- Carousel Item -->
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card mb-4 shadow-sm">
                                                <img src="{{ asset('imagenes/cancun.jpg') }}" class="card-img-top" alt="Cancún" style="width: 100%; height: 200px; object-fit: cover;">
                                                <div class="card-body">
                                                    <h5 class="card-title">Cancún, México</h5>
                                                    <p class="card-text"><strong>Fecha:</strong> Julio 2020</p>
                                                    <p class="card-text"><strong>Vuelo:</strong> A-102 AeroMéxico</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card mb-4 shadow-sm">
                                                <img src="{{ asset('imagenes/japon.jpg') }}" class="card-img-top" alt="Tokio" style="width: 100%; height: 200px; object-fit: cover;">
                                                <div class="card-body">
                                                    <h5 class="card-title">Tokio, Japón</h5>
                                                    <p class="card-text"><strong>Fecha:</strong> Marzo 2023</p>
                                                    <p class="card-text"><strong>Vuelo:</strong> M-302 - American Airlines</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card mb-4 shadow-sm">
                                                <img src="{{ asset('imagenes/france.jpg') }}" class="card-img-top" alt="París" style="width: 100%; height: 200px; object-fit: cover;">
                                                <div class="card-body">
                                                    <h5 class="card-title">París, Francia</h5>
                                                    <p class="card-text"><strong>Fecha:</strong> Diciembre 2022</p>
                                                    <p class="card-text"><strong>Vuelo:</strong> P-789 - Air France</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin del Carousel Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</section>
@endsection
