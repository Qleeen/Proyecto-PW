<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorHotelAdmin extends FormRequest
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
            'txtnombre' => 'required|min:20||regex:/^[\pL\s]+$/u',
            'txtpais' => 'required|regex:/^[\pL\s]+$/u',
            'txtestado' => 'required|regex:/^[\pL\s]+$/u',
            'txtlugar' => 'required|regex:/^[\pL\s]+$/u',
            'txtprecio' => 'required|numeric',
            'txtpersonas' => 'required|numeric',
            
        ];
    }
}
