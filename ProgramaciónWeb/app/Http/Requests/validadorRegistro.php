<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorRegistro extends FormRequest
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
            'txtnombre' => 'required|min:4||regex:/^[\pL\s]+$/u',
            'txtemail' => 'required|email:rfc,dns',
            'txtpassword' => 'required|min:8',
            'txtpassword_confirmation' => 'required|same:txtpassword',
        ];
    }
}
