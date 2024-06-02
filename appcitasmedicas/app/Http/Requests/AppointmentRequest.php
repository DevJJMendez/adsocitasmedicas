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
            'id_specialty' => 'required',
            'id_doctor' => 'required',
            'appointment_date' => 'required|after_or_equal:today',
        ];
    }

    public function messages()
    {
        return [
            'id_specialty' => 'Debe selecionar una especialidad',
            'id_doctor' => 'Debe selecionar un doctor',
            'appointment_date' => 'Selecione dia y hora para su cita',
            'appointment_date.after_or_equal' => 'La fecha de la cita no puede ser anterior a la fecha actual',
        ];
    }
}
