@extends('layouts.plantillanavbar')

@section('titulo', 'Actualizar Cliente')

@section('contenido')


<div class="container mt-5 col-md-8">
  @if (session('exito'))
    <x-Alert tipo="success"> {{ session('exito') }} </x-Alert>
  @endif

  @foreach ($ConsultarHoteles as $hotel)
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
        <a href="{{ route('rutaEditarCliente', ['id' => $cliente->id]) }}" class="btn btn-success btn-sm">{{ __('Actualizar') }}</a>
        <form action="{{ route('rutaEliminarCliente', $cliente->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Seguro?');">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger btn-sm">{{ __('Eliminar') }}</button>
        </form>
      </div>
    </div>
  @endforeach



  
</div>

@endsection
