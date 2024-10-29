@extends('layouts.plantillanavbar')

@section('titulo', 'login')

@section('contenido')

<section class="vh-100" style="background-color: #ffffed;">
  <div class="container py-5 h-100">

    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-flex justify-content-center align-items-center">
            <img src="{{ asset('imagenes/Login.png') }}" alt="login form" class="img-fluid" style="width: 70%; height: auto; border-radius: 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form>
                  @csrf

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="background: #e6b92c;"></i>
                    <span class="h1 fw-bold mb-0">Login</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Inicia sesión en tu cuenta</h5>

                  <div class="form-outline mb-4">
                    <input type="email" id="email" name="txtemail" class="form-control form-control-lg" required>
                    <label class="form-label" for="email">Correo Electrónico</label>
                  </div>

                
                  <div class="form-outline mb-4">
                    <input type="password" id="password" name="txtpassword" class="form-control form-control-lg" required>
                    <label class="form-label" for="password">Contraseña</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="button">Login</button>
                  </div>


                  <p class="mb-5 pb-lg-2" style="color: #393f81;">No tienes cuenta? <a href="{{ route('rutaregistro') }}" style="color: #393f81;">Registrate aquí</a></p>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection



