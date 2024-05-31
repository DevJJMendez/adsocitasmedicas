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
            'id_document_type' => 'required',
            'identification_number' => 'required',
            'name' => 'required|string',
            'last_name' => 'required|string',
            'number_phone' => 'required||unique:third_data,number_phone',
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
            'id_gender' => 'required',
            'id_specialty' => 'required',
            'address' => 'required',
            'password' => 'nullable|string|min:4',
        ];
    }
    public function messages()
    {
        return [
            'identification_number.required' => 'Debe ingresar el número de identificación',
            'name.required' => 'Debe ingresar el nombre',
            'name.string' => 'Solo debe contener letras',
            'last_name.required' => 'Debe ingresar el apellido',
            'last_name.string' => 'Solo debe contener letras',

            'number_phone.required' => 'Debe ingresar un número telefonico',
            'number_phone.unique' => 'El número telefonico ya existe',
            'number_phone.numeric' => 'Solo debe contener números',

            'address.required' => 'Debe ingresar una dirección',

            'email.required' => 'Debe ingresar un correo electronico',
            'email.email' => 'Debe ingresar un correo electronico valido',
            'password.required' => 'Debe ingresar una contraseña',

            'birth_date.required' => 'Debe ingresar una fecha de nacimiento',
            'birth_date.before_or_equal' => 'La fecha de nacimiento no puede ser mayor a la fecha actual',
            'birth_date.after_or_equal' => 'La fecha de nacimiento no puede ser menor al año 1925',
        ];
    }
}
