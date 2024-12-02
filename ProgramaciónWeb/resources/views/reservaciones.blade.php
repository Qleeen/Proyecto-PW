@extends('layouts.plantillanavbar')

@section('titulo', 'Buscar Vuelos')

@section('contenido')

<section class="py-5" style="background-color: #ffffed;">
    <div class="container" style="max-width: 800px; border: 2px solid #ddd; border-radius: 15px; background-color: white; padding: 40px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h2 class="mb-4 text-center" style="color: #44749d;">Encuentra tu próximo vuelo</h2>
        
        <form action="{{route('buscarVuelos')}}" method="GET">
    @csrf
    <div class="row">
        <!-- Origen y destino -->
        <div class="col-md-6 mb-3">
            <label for="origen" class="form-label">Origen</label>
            <input type="text" name="origen" value="{{ old('origen') }}" class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label for="destino" class="form-label">Destino</label>
            <input type="text" name="destino" value="{{ old('destino') }}" class="form-control">
        </div>
    </div>

    <div class="row">
        <!-- Fechas -->
        <div class="col-md-6 mb-3">
            <label for="fecha_salida" class="form-label">Fecha de Salida</label>
            <input type="date" name="fecha_salida" value="{{ old('fecha_salida') }}" class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label for="fecha_regreso" class="form-label">Fecha de Regreso</label>
            <input type="date" name="fecha_regreso" value="{{ old('fecha_regreso') }}" class="form-control">
        </div>
    </div>

    <div class="row">
        <!-- Número de pasajeros -->
        <div class="col-md-6 mb-3">
            <label for="num_pasajeros" class="form-label">Número de Pasajeros</label>
            <input type="number" name="num_pasajeros" value="{{ old('num_pasajeros') }}" class="form-control" min="1">
        </div>
        <!-- Aerolínea -->
        <div class="col-md-6 mb-3">
            <label for="aerolinea" class="form-label">Aerolínea</label>
            <input type="text" name="aerolinea" value="{{ old('aerolinea') }}" class="form-control">
        </div>
    </div>

    <div class="row">
        <!-- Precio -->
        <div class="col-md-6 mb-3">
            <label for="precio_min" class="form-label">Precio Mínimo</label>
            <input type="number" name="precio_min" value="{{ old('precio_min') }}" class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label for="precio_max" class="form-label">Precio Máximo</label>
            <input type="number" name="precio_max" value="{{ old('precio_max') }}" class="form-control">
        </div>
    </div>

    <div class="row">
        <!-- Escalas -->
        <div class="col-md-6 mb-3">
            <label for="escalas" class="form-label">Número de Escalas</label>
            <input type="number" name="escalas" value="{{ old('escalas') }}" class="form-control" min="0">
        </div>
        <!-- Horario -->
        <div class="col-md-3 mb-3">
            <label for="hora_salida" class="form-label">Hora de Salida</label>
            <input type="time" name="hora_salida" value="{{ old('hora_salida') }}" class="form-control">
        </div>
        <div class="col-md-3 mb-3">
            <label for="hora_llegada" class="form-label">Hora de Llegada</label>
            <input type="time" name="hora_llegada" value="{{ old('hora_llegada') }}" class="form-control">
        </div>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-primary">Buscar Vuelo</button>
    </div>
</form>
    </div>

    @if(isset($vuelos) && $vuelos->isNotEmpty())
        <div class="container mt-5">
            <h3 class="text-center" style="color: #44749d;">Resultados de Búsqueda</h3>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Origen</th>
                            <th>Destino</th>
                            <th>Fecha de Salida</th>
                            <th>Fecha de Regreso</th>
                            <th>Clase</th>
                            <th>Precio</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($vuelos as $vuelo)
                            <tr>
                                <td>{{ $vuelo->origen }}</td>
                                <td>{{ $vuelo->destino }}</td>
                                <td>{{ $vuelo->fecha_salida }}</td>
                                <td>{{ $vuelo->fecha_regreso }}</td>
                                <td>{{ $vuelo->clase }}</td>
                                <td>${{ number_format($vuelo->precio, 2) }}</td>
                                <td>
                                    <a href="{{ route('reservarVuelo', $vuelo->id) }}" class="btn btn-success btn-sm">Reservar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @elseif(isset($vuelos))
        <div class="container mt-5">
            <p class="text-center text-muted">No se encontraron vuelos que coincidan con los criterios de búsqueda.</p>
        </div>
    @endif
</section>

@endsection
