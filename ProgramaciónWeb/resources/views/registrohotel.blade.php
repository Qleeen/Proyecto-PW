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
      <input type="text" class="form-control" name="txtnombre" >
    </div>
    <div class="mb-3">
      <label for="pais" class="form-label">País</label>
      <input type="text" class="form-control" name="txtpais">
    </div>
    <div class="mb-3">
      <label for="estado" class="form-label">Estado</label>
      <input type="text" class="form-control"  name="txtestado" >
    </div>
    <div class="mb-3">
      <label for="lugar" class="form-label">Lugar</label>
      <input type="text" class="form-control"  name="txtlugar" >
    </div>
    <div class="mb-3">
      <label for="precio" class="form-label">Precio</label>
      <input type="number" step="0.01" class="form-control"  name="txtprecio">
    </div>
    <div class="mb-3">
      <label for="personas" class="form-label">Personas</label>
      <input type="number" class="form-control" " name="txtpersonas">
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
  </form>
</div>


@endsection
