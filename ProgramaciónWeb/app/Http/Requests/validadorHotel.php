<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorHotel extends FormRequest
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
            'txtdestino' => 'required|regex:/^[\pL\s]+$/u|min:3',
            'txtfecha' => 'required|date',
            'txtfecha_salida' => 'required|date|after:txtfecha',
            'txthabitacion' => 'required|numeric',
        ];
    }
}
