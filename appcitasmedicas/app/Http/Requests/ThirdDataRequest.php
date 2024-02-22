<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThirdDataRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'business_name' => 'required|min:4',
            'nit' => 'required|numeric',
            'number_phone' => 'required|min:8|max:30',
            'email' => 'required|email',
            'address' => 'required',
            'statu_type_id' => 'required',
        ];
    }
    public function messages()
    {
        return [

            'business_name.required' => 'Debe ingresar el nombre de la entidad',
            'business_name.min' => 'El nombre debe tener al menos 4 caracteres',

            'nit.required' => 'Debe ingresar el nit de la entidad',
            'nit' => 'Solo debe contener números',

            'number_phone.required' => 'Debe ingresar un número telefonico',
            // 'number_phone.numeric' => 'Solo debe contener números',

            'email.required' => 'Debe ingresar un correo electronico',
            'email.email' => 'Debe ingresar un correo electronico valido',

            'address.required' => 'Debe ingresar una dirección',
            'statu_type_id.required' => 'Debe elegir un estado (Activo ó Inactivo)',
        ];
    }
}
