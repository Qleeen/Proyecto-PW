<?php

namespace App\Http\Controllers;

use App\Models\Vuelo;
use Illuminate\Http\Request;

class VueloController extends Controller
{
    public function buscarVuelos(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'origen' => 'nullable|string|max:255',
            'destino' => 'nullable|string|max:255',
            'fecha_salida' => 'nullable|date',
            'fecha_regreso' => 'nullable|date|after_or_equal:fecha_salida',
            'num_pasajeros' => 'nullable|integer|min:1',
            'aerolinea' => 'nullable|string|max:255',
            'precio_min' => 'nullable|numeric|min:0',
            'precio_max' => 'nullable|numeric|min:0',
            'escalas' => 'nullable|integer|min:0',
            'hora_salida' => 'nullable|date_format:H:i',
            'hora_llegada' => 'nullable|date_format:H:i',
        ]);
    
        // Construir la consulta
        $vuelos = Vuelo::query()
            ->when($request->origen, fn($query) => $query->where('origen', 'like', '%' . $request->origen . '%'))
            ->when($request->destino, fn($query) => $query->where('destino', 'like', '%' . $request->destino . '%'))
            ->when($request->fecha_salida, fn($query) => $query->where('fecha_salida', '>=', $request->fecha_salida))
            ->when($request->fecha_regreso, fn($query) => $query->where('fecha_regreso', '<=', $request->fecha_regreso))
            ->when($request->num_pasajeros, fn($query) => $query->where('num_pasajeros', $request->num_pasajeros))
            ->when($request->aerolinea, fn($query) => $query->where('aerolinea_nombre', 'like', '%' . $request->aerolinea . '%'))
            ->when($request->precio_min, fn($query) => $query->where('precio', '>=', $request->precio_min))
            ->when($request->precio_max, fn($query) => $query->where('precio', '<=', $request->precio_max))
            ->when($request->escalas, fn($query) => $query->where('num_escalas', $request->escalas))
            ->when($request->hora_salida, fn($query) => $query->whereTime('fecha_salida', '>=', $request->hora_salida))
            ->when($request->hora_llegada, fn($query) => $query->whereTime('fecha_regreso', '<=', $request->hora_llegada))
            ->get();
    
        // Retornar la vista con los resultados
        return view('vuelos.reservacion', compact('vuelos'));
    }



    public function mostrarVuelo($id)
    {
        $vuelo = Vuelo::find($id);
    
        if (!$vuelo) {
            return redirect()->route('rutavuelos')->with('error', 'Vuelo no encontrado.');
        }
    
        return view('vuelos', compact('vuelo'));
    }

    
}
