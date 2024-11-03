<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorPago extends FormRequest
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
            'txtname' => 'required|min:15',
            'txttarjeta' => 'required|numeric|digits:16',
            'txtmes' => 'required|numeric|digits:2',
            'txtcvv' => 'required|numeric|digits:3',
        ];
    }
}
