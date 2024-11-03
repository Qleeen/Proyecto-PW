<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorReserva extends FormRequest
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
            'txtorigen' => 'required|regex:/^[\pL\s]+$/u',
            'txtdestino' => 'required|regex:/^[\pL\s]+$/u',
            'txtfecha' => 'required|date',
            'txtfecha_salida' => 'required|date|after:txtfecha',
            'txtnumero' => 'required|numeric',
            'txtclase' => 'required|in:economica,primera_clase',
        ];
    }
}
