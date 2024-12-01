@extends('layouts.plantillanavbar')

@section('titulo', 'Actualizar Hotel')

@section('contenido')

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Gestión</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('rutaclientes') }}">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('rutahotelConsulta') }}">Hoteles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('rutaclientes') }}">Vuelos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<a href="{{ route('rutaHotelRegistro') }}" class="btn btn-success">{{ __('Agregar Hotel') }}</a>

<div class="container mt-5 col-md-8">
  @if (session('exito'))
    <x-Alert tipo="success"> {{ session('exito') }} </x-Alert>
  @endif

  @foreach ($ConsultarHotel as $hotel)
    <div class="card text-justify font-monospace mb-3">
      <div class="card-header fs-5 text-secondary">
        {{ $hotel->nombre }}
      </div>
      <div class="card-body text-primary">
        <h5 class="fw-bold">{{ $hotel->pais}}</h5>
        <h5 class="fw-bold">{{ $hotel->estado}}</h5>
        <h5 class="fw-bold">{{ $hotel->lugar}}</h5>
        <h5 class="fw-bold">{{ $hotel->precio}}</h5>
        <h5 class="fw-bold">{{ $hotel->personas}}</h5>
        <p class="card-text fw-lighter"></p>
      </div>
      <div class="card-footer text-muted">
        <a href="{{ route('rutaEditarHotel', ['id' => $hotel->id]) }}" class="btn btn-success btn-sm">{{ __('Actualizar') }}</a>
        <form action="{{ route('rutaEliminarHotel', $hotel->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Seguro?');">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger btn-sm">{{ __('Eliminar') }}</button>


        </form>
        
      </div>

      
    </div>
  @endforeach



  
</div>

@endsection
