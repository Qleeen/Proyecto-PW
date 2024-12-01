<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorVuelos extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'txtorigen' => 'required|string|max:255',
            'txtdestino' => 'required|string|max:255',
            'txtfecha_salida' => 'required|date',
            'txtfecha_regreso' => 'required|date|after:txtfecha_salida',
            'txtnum_pasajeros' => 'required|integer|min:1',
            'txtprecio' => 'required|numeric|min:0',
            'txtclase' => 'required|string|in:economica,primera_clase',
            'txtaerolinea_nombre' => 'required|string|max:255',
            'txtescala_origen' => 'required|string|max:255',
            'txtescala_destino' => 'required|string|max:255',
            'txtescala_fecha' => 'required|date|after:txtfecha_salida',
            'txtreserva_fecha' => 'required|date',
        ];
    }
}
