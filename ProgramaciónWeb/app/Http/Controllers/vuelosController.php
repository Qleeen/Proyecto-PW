<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\ValidadorVuelos;
use Carbon\Carbon;
class vuelosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ConsultarVuelo = DB::table('vuelos')->get();
        return view('vuelosConsulta', compact('ConsultarVuelo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registroVuelo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ValidadorVuelos $request)
    {
        DB::table('vuelos')->insert([
            'origen' => $request->input('txtorigen'),
            'destino' => $request->input('txtdestino'),
            'fecha_salida' => $request->input('txtfecha_salida'),
            'fecha_regreso' => $request->input('txtfecha_regreso'),
            'num_pasajeros' => $request->input('txtnum_pasajeros'),
            'clase' => $request->input('txtclase'),
            'precio' => $request->input('txtprecio'),
            'aerolinea_nombre' => $request->input('txtaerolinea_nombre'),
            'escala_origen' => $request->input('txtescala_origen'),
            'escala_destino' => $request->input('txtescala_destino'),
            'escala_fecha' => $request->input('txtescala_fecha'),
            'reserva_fecha' => $request->input('txtreserva_fecha'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        $usuario = $request->input('txtorigen');
        session()->flash('exito', 'Se guardo el vuelo' .$usuario);
        return to_route('rutavuelosConsulta');
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
        $vuelo = DB::table('vuelos')->where('id', $id)->first();
        return view('vuelosUpdate', compact('vuelo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('vuelos')
            ->where('id', $id)
            ->update([
                'origen' => $request->input('txtorigen'),
                'destino' => $request->input('txtdestino'),
                'fecha_salida' => $request->input('txtfecha_salida'),
                'fecha_regreso' => $request->input('txtfecha_regreso'),
                'num_pasajeros' => $request->input('txtnum_pasajeros'),
                'clase' => $request->input('txtclase'),
                'precio' => $request->input('txtprecio'),
                'aerolinea_nombre' => $request->input('txtaerolinea_nombre'),
                'escala_origen' => $request->input('txtescala_origen'),
                'escala_destino' => $request->input('txtescala_destino'),
                'escala_fecha' => $request->input('txtescala_fecha'),
                'reserva_fecha' => $request->input('txtreserva_fecha'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            $usuario = $request->input('txtorigen');
            session()->flash('exito', 'Se actualizo el vuelo' .$usuario);
            return to_route('rutavuelosConsulta');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('vuelos')->where('id', $id)->delete();
        session()->flash('exito','Se elimino el vuelo' .$id);
        return to_route('rutavuelosConsulta');
    }
}
