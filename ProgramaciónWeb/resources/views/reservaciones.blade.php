@extends('layouts.plantillanavbar')

@section('titulo', 'reservaciones')  

@section('contenido')

<section class="py-5" style="background-color: #ffffed;">
    <div class="container" style="max-width: 800px; border: 2px solid #ddd; border-radius: 15px; background-color: white; padding: 40px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <h2 class="mb-4 text-center" style= "color: #44749d;">Reserva tu siguiente aventura</h2>
        
        <form>
            <div class="row">
                
                <div class="col-md-6 mb-3">
                    <label for="origen" class="form-label">Origen</label>
                    <input type="txttexto" class="form-control" id="origen" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="destino" class="form-label">Destino</label>
                    <input type="txttexto" class="form-control" id="destino" required>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label for="fecha_salida" class="form-label">Fecha de Salida</label>
                    <input type="txtdate" class="form-control" id="fecha_salida" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="fecha_regreso" class="form-label">Fecha de Regreso</label>
                    <input type="txtdate" class="form-control" id="fecha_regreso" required>
                </div>
            </div>


            <div class="mb-3">
                <label for="pasajeros" class="form-label">Pasajeros</label>
                <input type="txtnumber" class="form-control" id="pasajeros" min="1" value="1" required>
            </div>


            <div class="mb-4">
                <label for="clase" class="form-label">Clase</label>
                <select class="form-select" id="clase" required>
                    <option value="economica">Turista</option>
                    <option value="primera_clase">Primera Clase</option>
                </select>
            </div>


            <div class="mb-4">
                <h5>Pasajeros</h5>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="adultos" class="form-label">Adultos (18-64)</label>
                        <input type="number" class="form-control" id="adultos" min="1" value="1" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="ninos" class="form-label">Niños (0-17)</label>
                        <input type="number" class="form-control" id="ninos" min="0" value="0">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="mayores" class="form-label">Mayores de 65</label>
                        <input type="number" class="form-control" id="mayores" min="0" value="0">
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Reservar Vuelo</button>
            </div>
        </form>
    </div>
</section>



@endsection