<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteRequest extends FormRequest
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
            'identification_number' =>'required',
            'first_name' =>'required',
            'sur_name' =>'required',
            'number_phone' =>'required',
            'birth_date' =>'required',
            'address' =>'required',

        ];
    }
    public function messages()
    {
        return [
            'identification_number.required' => 'Debe ingresar el número de identificación',
            'first_name.required' => 'Debe ingresar el primer nombre',
            'sur_name.required' => 'Debe ingresar el primer apellido',

            'number_phone.required' => 'Debe ingresar un número telefonico',
            // 'number_phone.numeric' => 'Solo debe contener números',

            'email.required' => 'Debe ingresar un correo electronico',
            'email.email' => 'Debe ingresar un correo electronico valido',
            'password.required' => 'Debe ingresar una contraseña',
            'birth_date.required' => 'Debe ingresar una fecha de nacimiento',
            'address.required' => 'Debe ingresar una dirección',
        ];
    }
}
