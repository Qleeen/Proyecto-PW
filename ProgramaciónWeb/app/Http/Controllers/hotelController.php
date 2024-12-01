<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class hotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ConsultarHotel = DB::table('hotel')->get();
        return view('hotelesConsulta', compact('ConsultarHotel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registroHotel');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('hotel')->insert([
            'nombre' => $request->input('txtnombre'),
            'pais' => $request->input('txtpais'),
            'estado' => $request->input('txtestado'),
            'lugar' => $request->input('txtlugar'),
            'precio' => $request->input('txtprecio'),
            'personas' => $request->input('txtpersonas'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $usuario = $request->input('txtnombre');
        session()->flash('exito', 'Se guardo el hotel' .$usuario);
        return to_route('rutahotelConsulta');
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
        $hotel = DB::table('hotel')->where('id', $id)->first();
        return view('hotelUpdate', compact('hotel'));
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('hotel')
            ->where('id', $id)
            ->update([
                'nombre' => $request->input('txtnombre'),
                'pais' => $request->input('txtpais'),
                'estado' => $request->input('txtestado'),
                'lugar' => $request->input('txtlugar'),
                'precio' => $request->input('txtprecio'),
                'personas' => $request->input('txtpersonas'),
                'updated_at' => Carbon::now(),
            ]);
            $usuario = $request->input('txtnombre');
            session()->flash('exito', 'Se actualizo el hotel' .$usuario);
            return to_route('rutahotelConsulta');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('hotel')->where('id', $id)->delete();
        session()->flash('exito','Se elimino el hotel' .$id);
        return to_route('rutahotelConsulta');
    }
}
