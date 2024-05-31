<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'identification_number' => 'required',
            'name' => 'required',
            'last_name' => 'required',
            'number_phone' => 'required',
            'birth_date' => [
                'required',
                'before_or_equal:today',
                'after_or_equal:1925-01-01',
                function ($attribute, $value, $fail) {
                    $idDocumentType = $this->id_document_type;
                    if ($idDocumentType == 1 && strtotime($value) >= strtotime('2006-01-01')) {
                        $fail('La fecha de nacimiento no puede ser posterior a 2006 para este tipo de documento');
                    }
                }
            ],
            'address' => 'required',
            'password' => 'required',
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
