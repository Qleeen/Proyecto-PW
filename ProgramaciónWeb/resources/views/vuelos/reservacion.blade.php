@extends('layouts.plantillanavbar')

@section('titulo', 'Resultados de la búsqueda')

@section('contenido')
<div class="container mt-5">
    <h2 class="text-center text-primary">Resultados de la búsqueda</h2>

    @if($vuelos->isEmpty())
        <p class="text-center text-muted">No se encontraron vuelos con los criterios especificados.</p>
    @else
    <table class="table table-striped mt-4">
    <thead>
        <tr>
            <th>Origen</th>
            <th>Destino</th>
            <th>Fecha de Salida</th>
            <th>Fecha de Regreso</th>
            <th>Pasajeros</th>
            <th>Clase</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($vuelos as $vuelo)
            <tr>
                <td>{{ $vuelo->origen }}</td>
                <td>{{ $vuelo->destino }}</td>
                <td>{{ $vuelo->fecha_salida }}</td>
                <td>{{ $vuelo->fecha_regreso }}</td>
                <td>{{ $vuelo->num_pasajeros }}</td>
                <td>{{ $vuelo->clase }}</td>
                <td>${{ number_format($vuelo->precio, 2) }}</td>
                <td>
                    <a href="{{ route('rutamostrarvuelos', ['id' => $vuelo->id]) }}" class="btn btn-primary">
                        Hacer Reservación
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

    @endif

    <div class="text-center mt-4">
        <a href="{{ route('rutareservaciones') }}" class="btn btn-secondary">Volver</a>
    </div>
</div>
@endsection
