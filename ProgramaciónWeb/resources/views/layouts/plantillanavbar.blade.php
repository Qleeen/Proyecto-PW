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


            



        </div>
    </nav>
</header>

@yield('contenido')

</body>
</html>
