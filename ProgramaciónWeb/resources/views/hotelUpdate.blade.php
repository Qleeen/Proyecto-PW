@extends('layouts.plantillanavbar')

@section('titulo', 'Actualizar Cliente')

@section('contenido')


<div class="container mt-5 col-md-6">
    <div class="card font-monospace">
        <div class="card-header fs-5 text-center text-primary">

        </div>
        <div class="card-body text-justify">
            <form action="{{route('rutaActualizarHotel', ['id' => $hotel->id])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nombre" class="form-label">{{__('Nombre: ')}}</label>
                    <input type="text" class="form-control" name="txtnombre" value="{{ $hotel->nombre }}" >
                    <small class="first-italic text-danger">{{ $errors->first('txtnombre') }}</small>
                </div>
                <div class="mb-3">
                    <label for="pais" class="form-label">{{__('Pais: ')}}</label>
                    <input type="text" class="form-control" name="txtpais" value="{{ $hotel->pais }}" >
                    <small class="first-italic text-danger">{{ $errors->first('txtpais') }}</small>
                </div>
                <div class="mb-3">
                    <label for="estado" class="form-label">{{__('Estado: ')}}</label>
                    <input type="text" class="form-control" name="txtestado" value="{{ $hotel->estado }}" >
                    <small class="first-italic text-danger">{{ $errors->first('txtestado') }}</small>
                </div>
                <div class="form-outline mb-4">
                    <label for="lugar" class="form-label" >Lugar</label>
                    <input type="text"  name="txtlugar" value="{{ $hotel->lugar }}" class="form-control form-control-lg"  />
                </div>
                <div class="form-outline mb-4">
                    <label for="precio" class="form-label" >Precio</label>
                    <input type="number"  name="txtprecio" value="{{ $hotel->precio }}" class="form-control form-control-lg"  />
                </div>
                <div class="form-outline mb-4">
                    <label for="personas" class="form-label" >Personas</label>
                    <input type="number"  name="txtpersonas" value="{{ $hotel->personas }}" class="form-control form-control-lg"  />
                </div>
                <div class="card-footer text-muted">
                    <div class="d-grid gap-2 mt-2 mb-1">
                        <button type="submit" class="btn btn-success btn-sm"> {{__('Actualizar cliente')}} </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

