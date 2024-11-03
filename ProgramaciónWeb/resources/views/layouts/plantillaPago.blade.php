<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>@yield('titulo')</title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="{{route('rutainicio')}}">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" 
        aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('rutaprocesos')}}">Procesos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('rutatestimonios')}}">Testimonios</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('rutaservicios')}}">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('rutalogin')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('rutaregistro')}}">Registrarse</a>
                </li>
            </ul>
            
            <ul class="navbar-nav d-flex">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('rutacuenta') }}" title="Mi Cuenta">
                        <img src="{{ asset('imagenes/cuenta.png') }}" alt="Cuenta" class="img-fluid" style="width: 40px; height: 40px;">
                    </a>
                </li>
            </ul>

            <form class="d-flex ms-2">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-dark bg-danger" type="submit">Buscar</button>
            </form>

        </div>
    </nav>
</header>

<section class="vh-100" style="background-color: #ffffed;">
    <div class="container mt-5">
        @session('exito')
        <script>
        Swal.fire({
        title: "Respuesta de servidor",
        text: "{{ $value }}",
        icon: "success"
      });
      </script>
      @endsession
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
                                <label for="fecha-expiracion" class="form-label">Fecha de Expiración</label>
                                <input type="month" name="txtmes" value="{{ old('txtmes') }}" class="form-control" id="fecha-expiracion" >
                                <small class="first-italic text-danger">{{ $errors->first('txtmes') }}</small>
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
