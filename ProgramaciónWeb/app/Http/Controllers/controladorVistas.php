<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorLogin;
use App\Http\Requests\validadorRegistro;
use App\Http\Requests\validadorReserva;
use App\Http\Requests\validadorHotel;
use App\Http\Requests\validadorPago;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function inicio(){
        return view('inicio');
    }
    public function login(){
        return view('login');
    }

    // public function registro(){
    //     return view('registro');
    // }

    public function servicios(){
        return view('servicios');
    }

    public function procesos(){
        return view('procesos');
    }

    public function testimonios(){
        return view('testimonios');
    }

    public function reservaciones(){
        return view('reservaciones');
    }

    public function cuenta(){
        return view('cuenta');

    }

    public function asientos(){
        return view('asientos');
    }

    public function hotel(){
        return view('hotel');
    }
    public function filtrohotel(){
        return view('filtrohotel');
    }
    public function vuelos(){
        return view('vuelos');
    }
    public function hospedaje(){
        return view('hospedaje');
    }
    public function informacion(){
        return view('informacion');
    }
    public function pago(){
        return view('pago');
    }

    










    public function procesarLogin(validadorLogin $peticionValidada){



        //redireccion con valores en session
        $usuario= $peticionValidada->input('txtemail');

        session()->flash('exito','Bienvenido' .$usuario);
        return to_route('rutainicio');

    }

    public function procesarRegistro(validadorRegistro $peticionValidada){



        //redireccion con valores en session
        $usuario= $peticionValidada->input('txtnombre');

        session()->flash('exito','Bienvenido' .$usuario);
        return to_route('rutainicio');

    }
    
    public function procesarReservacion(validadorReserva $peticionValidada){



        //redireccion con valores en session
        $usuario= $peticionValidada->input('txtorigen');

        session()->flash('exito','Registro hacia' .$usuario, 'completado, buen viaje');
        return to_route('rutahotel');

    }

    public function procesarHotel(validadorHotel $peticionValidada){



        //redireccion con valores en session
        $usuario= $peticionValidada->input('txtdestino');

        session()->flash('exito','Registro hacia' .$usuario, 'completado, buen viaje');
        return to_route('rutafiltrohotel');

    }

    public function procesarPago(validadorPago $peticionValidada){



        //redireccion con valores en session
        $usuario= $peticionValidada->input('txttarjeta');

        session()->flash('exito','Cargo realizado a' .$usuario,);
        return to_route('rutapago');

    }


    // public function procesarClientes(validadorClientes $peticionValidada){



    //     //redireccion con valores en session
    //     $usuario= $peticionValidada->input('txtnombre');

    //     session()->flash('exito','se guardo el usuario'.$usuario);
    //     return to_route('rutaregistro');

    // }


}
