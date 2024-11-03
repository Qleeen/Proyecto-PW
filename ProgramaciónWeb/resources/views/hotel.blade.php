@extends('layouts.plantillanavbar')

@section('titulo', 'hotel')

@section('contenido')

<section class="py-5" style="background-image: url('{{ asset('imagenes/hotel.webp') }}'); background-size: cover; min-height: 100vh; background-color: rgba(255, 255, 100, 0.8);">
    <div class="container text-center text-white">
        <form action="/enviarHotel" method="POST">
        @csrf
        <h1 class="display-4 mb-4" style= "color: #44749d">¡Reserva tu hotel! </h1>
        <div class="d-flex justify-content-center align-items-center mb-4">
            <input type="text" name="txtdestino" value="{{ old('txtdestino') }}" class="form-control me-2" placeholder="Destino" style="width: 150px;">
            <small class="first-italic text-danger">{{ $errors->first('txtdestino') }}</small>
            <input type="date" name="txtfecha" value="{{ old('txtfecha') }}" class="form-control me-2" placeholder="Check-in" style="width: 150px;">
            <small class="first-italic text-danger">{{ $errors->first('txtfecha') }}</small>
            <input type="date" name="txtfecha_salida" value="{{ old('txtfecha_salida') }}" class="form-control me-2" placeholder="Check-out" style="width: 150px;">
            <small class="first-italic text-danger">{{ $errors->first('txtfecha_salidal') }}</small>
            <input type="number" name="txthabitacion" value="{{ old('txthabitacion') }}" class="form-control me-2" placeholder="No. Habitaciones" style="width: 150px;">
            <small class="first-italic text-danger">{{ $errors->first('txthabitacion') }}</small>
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn btn-primary btn-lg btn-blockbtn-outline-light me-2" type="submit"><i class="fas fa-filter"></i> Filtros</button>
        </div>
        </form>
    </div>
</section>




@endsection