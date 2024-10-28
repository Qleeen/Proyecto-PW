<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function inicio(){
        return view('inicio');
    }
    public function login(){
        return view('login');
    }

    public function registro(){
        return view('registro');
    }

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



    // public function procesarClientes(validadorClientes $peticionValidada){



    //     //redireccion con valores en session
    //     $usuario= $peticionValidada->input('txtnombre');

    //     session()->flash('exito','se guardo el usuario'.$usuario);
    //     return to_route('rutaregistro');

    // }


}
