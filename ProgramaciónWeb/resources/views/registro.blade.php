@extends('layouts.plantillanavbar')

@section('titulo', 'Registro')

@section('contenido')

<section class="vh-100" style="background-color: #ffffed;">
  <div class="container py-5 h-100">
    @if (session('exito'))
    <x-Alert tipo="success"> {{ session('exito') }} </x-Alert>
    @endif
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">

            <div class="col-md-6 col-lg-5 d-flex justify-content-center align-items-center">
              <img src="{{ asset('imagenes/Registro.png') }}" alt="registro form" class="img-fluid" style="width: 85%; height: auto; border-radius: 3rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="{{ route('enviaregistro') }}" method="POST">
                  @csrf 

         
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-user-plus fa-2x me-3" style="background: #e6b92c;"></i>
                    <span class="h1 fw-bold mb-0" style="color: #d4a024;">Registro</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Crea tu cuenta</h5>

                
                  <div class="form-outline mb-4">
                    <input type="text" name="txtnombre" value="{{ old('txtnombre') }}" class="form-control form-control-lg" />
                    <label class="form-label" for="name">Nombre Completo</label>
                    <small class="first-italic text-danger">{{ $errors->first('txtnombre') }}</small>
                  </div>

                  
                  
                  <div class="form-outline mb-4">
                    <input type="email"  name="txtemail" value="{{ old('txtemail') }}" class="form-control form-control-lg"  />
                    <label class="form-label" for="email">Correo Electrónico</label>
                    <small class="first-italic text-danger">{{ $errors->first('txtemail') }}</small>
                  </div>

                
                  <div class="form-outline mb-4">
                    <input type="password"  name="txtpassword" value="{{ old('txtpassword') }}" class="form-control form-control-lg"  />
                    <label class="form-label" for="password">Contraseña</label>
                    <small class="first-italic text-danger">{{ $errors->first('txtpassword') }}</small>
                  </div>

                  
                  <div class="form-outline mb-4">
                    <input type="password"  name="txtpassword_confirmation" value="{{ old('txtpassword_confirmation') }}" class="form-control form-control-lg"  />
                    <label class="form-label" for="password_confirmation">Confirmar Contraseña</label>
                    <small class="first-italic text-danger">{{ $errors->first('txtpassword_confirmation') }}</small>
                  </div>

                  
                  <div class="pt-1 mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Registrarse</button>
                  </div>

                  
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">¿Ya tienes una cuenta? <a href="{{ route('rutalogin') }}"
                      style="color: #393f81;">Inicia sesión aquí</a></p>


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
