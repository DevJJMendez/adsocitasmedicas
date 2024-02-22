<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicalEntityRequest extends FormRequest
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
            'entity_type_id'=>'required',
            'business_name'=>'required',
            'nit'=>'required',
            'number_phone'=>'required',
            'email'=>'required',
            'address'=>'required',
            'statu_type_id'=>'required',
        ];
    }
}
