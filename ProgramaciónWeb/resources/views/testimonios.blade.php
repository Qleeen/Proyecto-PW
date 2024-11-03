@extends('layouts.plantillanavbar')

@section('titulo', 'procesos')  

@section('contenido')

<section class="py-5" style="background-color: #ffffed; justify-content: center; align-items: center; min-height: 100vh;">
    <div class="container text-center">
        <h2 class="text-uppercase text-secondary mb-4">Testimonios</h2>
        <h3 class="mb-5">
            <span style="color: #d4a024;">Amado</span> por los aventureros.
        </h3>
        <div class="row">
            <!-- Testimonio 1 -->
            <div class="col-md-4">
                <div class="card h-100 p-3">
                    <div class="card-body">
                        <img src="{{ asset('imagenes/usuarioT.png') }}" alt="Avatar 1" class="mb-3 rounded-circle" style="width: 100px;">
                        <h4 class="card-title" style="color: #44749d;">Fernando Gómez</h4>
                        <p class="text-muted">@Mr. Osito</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>

            <!-- Testimonio 2 -->
            <div class="col-md-4">
                <div class="card h-100 p-3">
                    <div class="card-body">
                        <img src="{{ asset('imagenes/usuarioT.png') }}" alt="Avatar 2" class="mb-3 rounded-circle" style="width: 100px;">
                        <h4 class="card-title" style="color: #44749d;">Fernando Gómez</h4>
                        <p class="text-muted">@Mr. Osito</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>

            <!-- Testimonio 3 -->
            <div class="col-md-4">
                <div class="card h-100 p-3">
                    <div class="card-body">
                        <img src="{{ asset('imagenes/usuarioT.png') }}"  alt="Avatar 3" class="mb-3 rounded-circle" style="width: 100px;">
                        <h4 class="card-title" style="color: #44749d;">Fernando Gómez</h4>
                        <p class="text-muted">@Mr. Osito</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





@endsection