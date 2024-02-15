<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicoRequest extends FormRequest
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
            'cedula' => 'required|numeric',
            'name' => 'required|string|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email',
            'address' => 'required',
            'number_phone' => 'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'cedula.required' => 'Debe ingresar un número de identificación',
            'cedula.numeric' => 'El número de identificacón no debe contener letras ni caracteres especiales',
            'name.required' => 'Debe ingresar el nombre del médico',
            'name.regex' => 'El nombre solo debe contener letras',
            'email.required' => 'Debe ingresar un correo electronico valido',
            'email.email' => 'Debe ingresar un correo electronico valido',
            'address.required' => 'Debe ingresar una dirección',
            'number_phone.required' => 'Debe ingresar un número telefonico',
            'number_phone.numeric' => 'El número telefonico no debe contener letras ni caracteres especiales',
        ];
    }
}
