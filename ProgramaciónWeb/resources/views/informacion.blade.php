@extends('layouts.plantillanavbar')

@section('titulo', 'Información sobre Reservas')

@section('contenido')

<section class="vh-100" style="background-color: #ffffed;">
    <div class="container mt-5">
        <h1 class="text-center mb-4" style="color: #b29130;">Bienvenido a Nuestro Servicio de Reservas</h1>
        <p class="text-center mb-5 lead" style="color: #6c757d;">Nos encargamos de brindarle al usuario la experiencia de reservar un vuelo y su hospedaje si así lo desea.</p>
        
        <div class="row">
            <div class="col-md-6 mb-4 d-flex">
                <div class="card shadow-sm h-100 w-100">
                    <img src="{{ asset('imagenes/vuelo.jpg') }}" class="card-img-top" alt="Reserva de vuelo" style="height: 400px; width: 100%; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #b29130;">Reserva de Vuelos</h5>
                        <p class="card-text">Buscamos las mejores opciones de vuelo para que puedas elegir la que mejor se adapte a tus necesidades. Con nuestra plataforma, comparar precios y horarios es muy fácil.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4 d-flex">
                <div class="card shadow-sm h-100 w-100">
                    <img src="{{ asset('imagenes/hospedaje.jpg') }}" class="card-img-top" alt="Reserva de hospedaje" style="height: 400px; width: 100%; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #b29130;">Reserva de Hospedaje</h5>
                        <p class="card-text">Ofrecemos una amplia variedad de opciones de hospedaje, desde hoteles lujosos hasta hostales económicos. Encuentra el lugar perfecto para tu estancia en solo unos clics.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="{{ route('rutareservaciones') }}" class="btn btn-primary btn-lg mt-4">Comienza a Reservar</a>
        </div>
    </div>
</section>

@endsection
