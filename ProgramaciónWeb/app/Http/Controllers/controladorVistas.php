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
}
