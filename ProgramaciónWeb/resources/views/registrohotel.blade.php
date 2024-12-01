@extends('layouts.plantillanavbar')

@section('titulo', 'RegistroHotel')

@section('contenido')


<div class="container mt-5 col-md-8">
    @if (session('exito'))
    <x-Alert tipo="success"> {{ session('exito') }} </x-Alert>
    @endif
  <h3 class="text-center mb-4">Agregar Nuevo Hotel</h3>
  <form action="{{ route('enviarHotel') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="txtnombre" value="{{ old('txtnombre') }}">
      <small class="first-italic text-danger">{{ $errors->first('txtnombre') }}</small>
    </div>
    <div class="mb-3">
      <label for="pais" class="form-label">País</label>
      <input type="text" class="form-control" name="txtpais" value="{{ old('txtpais') }}">
      <small class="first-italic text-danger">{{ $errors->first('txtpais') }}</small>
    </div>
    <div class="mb-3">
      <label for="estado" class="form-label">Estado</label>
      <input type="text" class="form-control"  name="txtestado" value="{{ old('txtestado') }}" >
      <small class="first-italic text-danger">{{ $errors->first('txtestado') }}</small>
    </div>
    <div class="mb-3">
      <label for="lugar" class="form-label">Lugar</label>
      <input type="text" class="form-control"  name="txtlugar" value="{{ old('txtlugar') }}">
      <small class="first-italic text-danger">{{ $errors->first('txtlugar') }}</small>
    </div>
    <div class="mb-3">
      <label for="precio" class="form-label">Precio</label>
      <input type="number" step="1" class="form-control"  name="txtprecio" value="{{ old('txtprecio') }}">
      <small class="first-italic text-danger">{{ $errors->first('txtprecio') }}</small>
    </div>
    <div class="mb-3">
      <label for="personas" class="form-label">Personas</label>
      <input type="number" class="form-control" " name="txtpersonas" value="{{ old('txtpersonas') }}">
      <small class="first-italic text-danger">{{ $errors->first('txtpersonas') }}</small>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
  </form>
</div>


@endsection
