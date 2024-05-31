<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PatientUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'id_document_type' => 'required',
            'identification_number' => [
                'required',
                'string',
                'max:12',
                Rule::unique('third_data', 'identification_number')->ignore($this->route('patient')->third_data_id, 'third_data_id')
            ],
            'name' => 'required|string|max:30',
            'last_name' => 'required|string|max:30',
            'number_phone' => [
                'required',
                'string',
                'max:30',
                Rule::unique('third_data')->ignore($this->route('patient')->third_data_id, 'third_data_id')
            ],
            'birth_date' => [
                'required',
                'date',
                'before_or_equal:today',
                // Validación personalizada basada en el tipo de documento
                function ($attribute, $value, $fail) {
                    if ($this->input('id_document_type') == 2 && $value < now()->subYears(18)->toDateString()) {
                        $fail('La fecha de nacimiento no puede ser inferior a 2006 para el tipo de documento seleccionado.');
                    }
                }
            ],
            'id_gender' => 'nullable',
            'address' => 'nullable|string|max:100',
            'id_medical_entity' => 'nullable',
            'id_status' => 'nullable',
            'email' => [
                'required',
                'string',
                'email',
                'max:100',
            ],
            'password' => 'nullable|string|min:4'
        ];
    }
    public function messages()
    {
        return [
            'id_document_type.required' => 'Debe seleccionar un tipo de documento.',
            'id_document_type.exists' => 'El tipo de documento seleccionado no es válido.',

            'identification_number.required' => 'Debe ingresar un número de identificación.',
            'identification_number.unique' => 'El número de identificación ya está en uso.',

            'name.required' => 'Debe ingresar un nombre.',
            'last_name.required' => 'Debe ingresar un apellido.',
            'number_phone.required' => 'Debe ingresar un número de teléfono.',
            'number_phone.unique' => 'El número de teléfono ya está en uso.',
            'address.string' => 'La dirección debe ser una cadena de texto.',

            'birth_date.required' => 'Debe ingresar una fecha de nacimiento.',
            'birth_date.before_or_equal' => 'La fecha de nacimiento no puede ser futura.',

            'id_gender.exists' => 'El género seleccionado no es válido.',

            // 'id_medical_entity.exists' => 'La entidad médica seleccionada no es válida.',
            // 'id_status.exists' => 'El estado seleccionado no es válido.',

            'email.required' => 'Debe ingresar un correo electrónico.',
            'email.email' => 'Debe ingresar un correo electrónico válido.',
            'email.unique' => 'El correo electrónico ya está en uso.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'password.confirmed' => 'La confirmación de la contraseña no coincide.'
        ];
    }
}
