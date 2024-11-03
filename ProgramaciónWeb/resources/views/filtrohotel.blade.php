@extends('layouts.plantillanavbar')

@section('titulo', 'filtrohotel')

@section('contenido')

<section class="py-5" style="background-color: #ffffed;">
    <div class="container">
        <div class="d-flex justify-content-center mb-4">
            <input type="text" class="form-control me-2" placeholder="Destino" style="width: 150px;">
            <input type="date" class="form-control me-2" placeholder="Check-in" style="width: 150px;">
            <input type="date" class="form-control me-2" placeholder="Check-out" style="width: 150px;">
            <input type="number" class="form-control me-2" placeholder="No. Habitaciones" style="width: 150px;">

        </div>

        <div class="row">

            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('imagenes/concan.jpg') }}" class="card-img-top" alt="Hotel Image">
                    <div class="card-body">
                        <h5 class="card-title">Concán, Texas, USA.</h5>
                        <p class="card-text">Calif: 9.7</p>
                        <p class="card-text">$3,664 MXN noche</p>
                        <p class="card-text">Estrellas: ★★★★☆</p>
                        <p class="card-text">Disponibilidad de habitaciones: 5</p>
                    </div>
                </div>
            </div>


            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('imagenes/concan.jpg') }}" class="card-img-top" alt="Hotel Image">
                    <div class="card-body">
                        <h5 class="card-title">Concán, Texas, USA.</h5>
                        <p class="card-text">Calif: 9.7</p>
                        <p class="card-text">$3,664 MXN noche</p>
                        <p class="card-text">Estrellas: ★★★★☆</p>
                        <p class="card-text">Disponibilidad de habitaciones: 10</p>
                    </div>
                </div>
            </div>


            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('imagenes/concan.jpg') }}" class="card-img-top" alt="Hotel Image">
                    <div class="card-body">
                        <h5 class="card-title">Concán, Texas, USA.</h5>
                        <p class="card-text">Calif: 9.7</p>
                        <p class="card-text">$3,664 MXN noche</p>
                        <p class="card-text">Estrellas: ★★★★☆</p>
                        <p class="card-text">Disponibilidad de habitaciones: 2</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection