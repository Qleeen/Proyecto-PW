<?php

namespace App\Http\Controllers;

use App\Models\Vuelo;
use Illuminate\Http\Request;

class VueloController extends Controller
{
    public function buscarVuelos(Request $request)
    {
        // Validar los parámetros de la búsqueda
        $request->validate([
            'origen' => 'required|string',
            'destino' => 'required|string',
            'fecha_salida' => 'required|date',
            'fecha_regreso' => 'nullable|date',
            'num_pasajeros' => 'required|integer|min:1',
        ]);

        // Realizar la búsqueda de vuelos en la base de datos
        $vuelos = Vuelo::where('origen', $request->origen)
                        ->where('destino', $request->destino)
                        ->where('fecha_salida', $request->fecha_salida)
                        ->when($request->fecha_regreso, function($query) use ($request) {
                            return $query->where('fecha_regreso', $request->fecha_regreso);
                        })
                        ->where('num_pasajeros', '>=', $request->num_pasajeros)
                        ->get();

        // Devolver los resultados a la vista
        return view('vuelos.resultados', compact('vuelos'));
    }
}
