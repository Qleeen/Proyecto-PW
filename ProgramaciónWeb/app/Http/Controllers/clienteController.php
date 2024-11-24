<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

//BD
use Illuminate\Support\Facades\DB;
//timestamp
use Carbon\Carbon;

//validador
use App\Http\Requests\validadorRegistro;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ConsultarClientes = DB::table('clientes')->get();
        return view('clientesConsulta', compact('ConsultarClientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorRegistro $request)
    {
        DB::table('clientes')->insert([
            'nombre' => $request->input('txtnombre'),
            'correo' => $request->input('txtemail'),
            'password' => $request->input('txtpassword'),
            'password_confirmation' => $request->input('txtpassword_confirmation'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);

        $usuario = $request->input('txtnombre');

        session()->flash('exito', 'Se guardo el usuario' .$usuario);
        return to_route('rutaregistro');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('clientes')->where('id', $id)->delete();
        session()->flash('exito','Se elimino el usuario' .$id);
        return to_route('rutaclientes');
    }
}
