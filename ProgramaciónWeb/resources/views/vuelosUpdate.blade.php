@extends('layouts.plantillanavbar')

@section('titulo', 'Actualizar Vuelo')

@section('contenido')

<div class="container mt-5 col-md-6">
    <div class="card font-monospace">
        <div class="card-header fs-5 text-center text-primary">
            Actualizar información del vuelo
        </div>
        <div class="card-body text-justify">
            <form action="{{ route('rutaActualizarVuelo', ['id' => $vuelo->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Origen -->
                <div class="mb-3">
                    <label for="origen" class="form-label">{{ __('Pais de Origen') }}</label>
                    <input type="text" class="form-control" name="txtorigen" value="{{ $vuelo->origen }}">
                    <small class="first-italic text-danger">{{ $errors->first('txtorigen') }}</small>
                </div>

                <!-- Destino -->
                <div class="mb-3">
                    <label for="destino" class="form-label">{{ __('Ciudad de Destino') }}</label>
                    <input type="text" class="form-control" name="txtdestino" value="{{ $vuelo->destino }}">
                    <small class="first-italic text-danger">{{ $errors->first('txtdestino') }}</small>
                </div>

                <!-- Fecha de Salida -->
                <div class="mb-3">
                    <label for="fecha_salida" class="form-label">{{ __('Fecha de Salida') }}</label>
                    <input type="date" class="form-control" name="txtfecha_salida" value="{{ $vuelo->fecha_salida }}">
                    <small class="first-italic text-danger">{{ $errors->first('txtfecha_salida') }}</small>
                </div>

                <!-- Fecha de Regreso -->
                <div class="form-outline mb-4">
                    <label for="fecha_regreso" class="form-label">{{ __('Fecha de Regreso') }}</label>
                    <input type="date" name="txtfecha_regreso" value="{{ $vuelo->fecha_regreso }}" class="form-control form-control-lg" />
                    <small class="first-italic text-danger">{{ $errors->first('txtfecha_regreso') }}</small>
                </div>

                <!-- Número de Pasajeros -->
                <div class="form-outline mb-4">
                    <label for="num_pasajeros" class="form-label">{{ __('Número de Pasajeros') }}</label>
                    <input type="number" name="txtnum_pasajeros" value="{{ $vuelo->num_pasajeros }}" class="form-control form-control-lg" min="1" />
                    <small class="first-italic text-danger">{{ $errors->first('txtnum_pasajeros') }}</small>
                </div>

                <!-- Clase -->
                <div class="form-outline mb-4">
                    <label for="clase" class="form-label">{{ __('Clase') }}</label>
                    <select name="txtclase" class="form-select">
                        <option value="economica" {{ $vuelo->clase == 'economica' ? 'selected' : '' }}>Economica</option>
                        <option value="primera_clase" {{ $vuelo->clase == 'primera_clase' ? 'selected' : '' }}>Primera Clase</option>
                    </select>
                    <small class="first-italic text-danger">{{ $errors->first('txtclase') }}</small>
                </div>

                <!-- Precio -->
                 <div class="form-outline mb-4">
                    <label for="precio" class="form-label">{{ __('Precio') }}</label>
                    <input type="number" name="txtprecio" value="{{ $vuelo->precio }}" class="form-control form-control-lg" />
                    <small class="first-italic text-danger">{{ $errors->first('txtprecio') }}</small>

                <!-- Aerolinea Nombre -->
                <div class="form-outline mb-4">
                    <label for="aerolinea_nombre" class="form-label">{{ __('Aerolínea') }}</label>
                    <input type="text" name="txtaerolinea_nombre" value="{{ $vuelo->aerolinea_nombre }}" class="form-control form-control-lg" />
                    <small class="first-italic text-danger">{{ $errors->first('txtaerolinea_nombre') }}</small>
                </div>

                <!-- Escala Origen -->
                <div class="form-outline mb-4">
                    <label for="escala_origen" class="form-label">{{ __('Escala de Origen') }}</label>
                    <input type="text" name="txtescala_origen" value="{{ $vuelo->escala_origen }}" class="form-control form-control-lg" />
                    <small class="first-italic text-danger">{{ $errors->first('txtescala_origen') }}</small>
                </div>

                <!-- Escala Destino -->
                <div class="form-outline mb-4">
                    <label for="escala_destino" class="form-label">{{ __('Escala de Destino') }}</label>
                    <input type="text" name="txtescala_destino" value="{{ $vuelo->escala_destino }}" class="form-control form-control-lg" />
                    <small class="first-italic text-danger">{{ $errors->first('txtescala_destino') }}</small>
                </div>

                <!-- Fecha de Escala -->
                <div class="form-outline mb-4">
                    <label for="escala_fecha" class="form-label">{{ __('Fecha de Escala') }}</label>
                    <input type="date" name="txtescala_fecha" value="{{ $vuelo->escala_fecha }}" class="form-control form-control-lg" />
                    <small class="first-italic text-danger">{{ $errors->first('txtescala_fecha') }}</small>
                </div>

                <!-- Fecha de Reserva -->
                <div class="form-outline mb-4">
                    <label for="reserva_fecha" class="form-label">{{ __('Fecha de Reserva') }}</label>
                    <input type="date" name="txtreserva_fecha" value="{{ $vuelo->reserva_fecha }}" class="form-control form-control-lg" />
                    <small class="first-italic text-danger">{{ $errors->first('txtreserva_fecha') }}</small>
                </div>

                <div class="card-footer text-muted">
                    <div class="d-grid gap-2 mt-2 mb-1">
                        <button type="submit" class="btn btn-success btn-sm">{{ __('Actualizar Vuelo') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
