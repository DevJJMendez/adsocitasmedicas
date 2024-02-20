<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'identification_number' => 'required|numeric',
            'first_name' => 'required|min:2|max:30|regex:/^[a-zA-Z\s]+$/',
            'sur_name' => 'required|min:2|max:30|regex:/^[a-zA-Z\s]+$/',
            'number_phone' => 'required',
            'email' => 'required|email',
            'birth_date' => 'required|date_format:Y-m-d',
            'address' => 'required|min:3|max:100',
        ];
    }
    public function messages()
    {
        return [
            'identification_number.required' => 'Debe ingresar un número de indentificacion',
            'identification_number.min' => 'El número debe contener al menos 8 digitos',
            'identification_number.max' => 'El número debe contener maximo 10 digitos',
            'identification_number.numeric' => 'Esta campo solo debe contener números',

            'first_name.required' => 'Debe ingresar el primer nombre',
            'first_name.regex' => 'El nombre solo debe contener letras',

            'sur_name.required' => 'Debe ingresar el primer apellido',
            'sur_name.regex' => 'El apellido solo debe contener letras',

            'number_phone.required' => 'Debe ingresar un número telefonico',
            'number_phone.numeric' => 'El número telefonico no debe contener letras ni caracteres especiales',

            'email.required' => 'Debe ingresar un correo electronico valido',
            'email.email' => 'Debe ingresar un correo electronico valido',

            'birth_date.required' => 'Debe seleccionar la fecha de nacimiento',
            'birth_date.date_format' => 'Debe ingresar un correo electronico valido',

            'address.required' => 'Debe ingresar una dirección',
            'address.date_format' => 'Debe ingresar una dirección valida',
        ];
    }
}
