<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpecialtyRequest extends FormRequest
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
            'name' => 'required|min:10|',
            'description' => 'min:10'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Debe ingresar el nombre de la especialidad',
            'name.min' => 'Debe tener al menos 10 caracteres',
            'description.min' => 'Debe tener al menos 10 caracteres'
        ];
    }
}
