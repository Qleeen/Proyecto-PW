@extends('layouts.plantillanavbar')

@section('titulo', 'inicio')  

@section('contenido')

<section class="vh-100 d-flex align-items-center" style="background-color: #ffffed;">
  <div class="container">
    <div class="row d-flex justify-content-between align-items-center">
      <!-- Texto -->
      <div class="col-md-6">
        <h1 class="display-4 fw-bold" style="color: #b29130;">Vuelo y estancia,</h1>
        <h1 class="display-4 fw-bold" style="color: #000;">todo en un mismo lugar.</h1>
        <p class="lead" style="color: #6c757d;">Tu viaje planeado, sin complicaciones ni retrasos, <a href="#" class="text-primary fw-bold">reserva ahora.</a></p>
        
        <!-- Botones -->
        <div class="mt-4">
          <a href="#" class="btn btn-primary btn-lg me-3">Reserva ahora</a>
          <a href="#" class="btn btn-outline-primary btn-lg">Más información</a>
        </div>
      </div>

      <!-- Imagen -->
      <div class="col-md-6">
        <img src="{{ asset('imagenes/Inicio.png') }}" alt="Globo terráqueo" class="img-fluid" style="box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1); border-radius: 0.5rem;" />
      </div>
    </div>
  </div>
</section>

@endsection