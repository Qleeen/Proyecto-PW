@extends('layouts.plantillanavbar')

@section('titulo', 'Actualizar Cliente')

@section('contenido')

  <div class="container mt-5 col-md-6">

    <div class="card font-monospace">
      <div class="card-header fs-5 text-center text-primary">
      </div>
  
      <div class="card-body text-justify">
        <form action="{{route('rutaActualizarCliente', ['id' => $cliente->id])}}" method="POST">
          @csrf
          @method('PUT')
      
          <div class="mb-3">
            <label for="nombre" class="form-label">{{__('Nombre: ')}}</label>
            <input type="text" class="form-control" name="txtnombre" value="{{ $cliente->nombre }}" >
            <small class="first-italic text-danger">{{ $errors->first('txtnombre') }}</small>

          </div>
          <div class="mb-3">
            <label for="correo" class="form-label">{{__('Correo: ')}}</label>
            <input type="email" class="form-control" name="txtemail" value="{{ $cliente->correo }}" >
            <small class="first-italic text-danger">{{ $errors->first('txtemail') }}</small>

          </div>
          <div class="mb-3">
            <label for="telefono" class="form-label">{{__('Correo: ')}}</label>
            <input type="number" class="form-control" name="txttelefono" value="{{ $cliente->telefono }}" >
            <small class="first-italic text-danger">{{ $errors->first('txttelefono') }}</small>

          </div>


          <div class="form-outline mb-4">
            <label for="password" class="form-label" >Contraseña</label>
            <input type="password"  name="txtpassword" value="{{ $cliente->password }}" class="form-control form-control-lg"  />
        </div>
        <div class="form-outline mb-4">
            <label for="password_confirmation" class="form-label" >Contraseña</label>
            <input type="password"  name="txtpassword_confirmation" value="{{ $cliente->password_confirmation }}" class="form-control form-control-lg"  />
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