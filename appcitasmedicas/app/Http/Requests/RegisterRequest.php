<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'identification_number' => 'required|unique:third_data,identification_number',
            'name' => 'required',
            'last_name' => 'required',
            'number_phone' => 'required|unique:third_data,number_phone',

            // TODO: RESTRICTIONS
            'birth_date' => 'required',
            'address' => 'required',
            'password' => 'required',
        ];
    }
    public function messages()
    {
        return [

            'identification_number.required' => 'Debe ingresar el número de identificación',
            'identification_number.unique' => 'El numero de identificación ya existe',

            'name.required' => 'Debe ingresar el primer nombre',
            'last_name.required' => 'Debe ingresar el primer apellido',

            'number_phone.required' => 'Debe ingresar un número telefonico',
            'number_phone.numeric' => 'Solo debe contener números',
            'number_phone.unique' => 'El numero telefonico ya existe',

            'email.required' => 'Debe ingresar un correo electronico',
            'email.email' => 'Debe ingresar un correo electronico valido',

            'password.required' => 'Debe ingresar una contraseña',

            'birth_date.required' => 'Debe ingresar una fecha de nacimiento',

            'address.required' => 'Debe ingresar una dirección',
        ];
    }
}
