@extends('layouts.plantillanavbar')

@section('titulo', 'pago')  

@section('contenido')



<section class="vh-100" style="background-color: #ffffed;">
    <div class="container mt-5">

        <h1 class="text-center mb-4" style="color: #004853;">Formulario de Pago</h1>
        <p class="text-center mb-5" style="color: #f63700;">Por favor, complete el siguiente formulario para procesar su pago.</p>
        
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="/enviarPago" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre Completo</label>
                                <input type="text" name="txtname" value="{{ old('txtname') }}" class="form-control"  placeholder="Ingrese su nombre completo" >
                                <small class="first-italic text-danger">{{ $errors->first('txtname') }}</small>
                            </div>

                            <div class="mb-3">
                                <label for="tarjeta" class="form-label">Número de Tarjeta</label>
                                <input type="text" name="txttarjeta" value="{{ old('txttarjeta') }}" class="form-control"  placeholder="Número de tarjeta" >
                                <small class="first-italic text-danger">{{ $errors->first('txttarjeta') }}</small>
                            </div>

                            <div class="mb-3">
                                <label for="fecha-expiracion" class="form-label">Fecha de Expiración Mes</label>
                                <input type="month" name="txtmes" value="{{ old('txtmes') }}" class="form-control" id="fecha-expiracion" >
                                <small class="first-italic text-danger">{{ $errors->first('txtmes') }}</small>
                            </div>

                            <div class="mb-3">
                                <label for="fecha-expiracion" class="form-label">Fecha de Expiración Año</label>
                                <input type="year" name="txtanio" value="{{ old('txtanio') }}" class="form-control" id="fecha-expiracion" >
                                <small class="first-italic text-danger">{{ $errors->first('txtanio') }}</small>
                            </div>

                            <div class="mb-3">
                                <label for="cvv" class="form-label">CVV</label>
                                <input type="text" name="txtcvv" value="{{ old('txtcvv') }}" class="form-control" id="cvv" placeholder="CVV" >
                                <small class="first-italic text-danger">{{ $errors->first('txtcvv') }}</small>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Pagar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@yield('contenido')
</body>
</html>


@endsection