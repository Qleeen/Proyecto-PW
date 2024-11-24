@extends('layouts.plantillanavbar')

@section('titulo', 'Registro')

@section('contenido')

  <div class="container mt-5 col-md-8">
    @foreach ($ConsultarClientes as $cliente)

    @if (session('exito'))
    <x-Alert tipo="success"> {{ session('exito') }} </x-Alert>
    @endif

    <div class="card text-justify font-monospace">

      <div class="card-header fs-5 text-secundary">
        {{$cliente -> nombre}}
      </div>

      <div class="card-body text-primary">
        <h5 class="fw-bold">{{$cliente -> correo}}</h5>

        <p class="card-text fw-lighter"></p>
      </div>

      <div class="card-footer text-muted">



        <a href="" type="submit" class="btn btn-success btn-sm">{{__('Actualizar')}}</a>
        

        <form action="{{route('rutaEliminarCliente', $cliente->id)}}" method="Post" style="display: inline-block;" onsubmit="return confirm('¿Seguro?');">          
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger btn-sm">{{__('Eliminar')}}</button>
    </form>

      </div>

    </div>
    @endforeach





  </div>
@endsection