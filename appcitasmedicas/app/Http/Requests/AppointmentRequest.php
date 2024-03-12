<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'appointment_id'=>'required',
            'id_patient'=>'required',
            'id_specialty' => 'required',
            'id_doctor'=>'required',
            'appointment_date'=>'required',
        ];
    }
}
