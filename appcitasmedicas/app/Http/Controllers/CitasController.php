<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Models\Appointments;
use App\Models\Specialty;
use App\Models\Third_Data;
use Exception;

class CitasController extends Controller
{
    public function index()
    {
        $userAppointments = Appointments::with([
            'specialty:specialty_id,name',
            'doctor.thirdData:third_data_id,name,last_name',
            'status:status_id,id_common_attribute',
            'status.commonAttribute:common_attribute_id,name',
        ])->where('id_patient', auth()->user()->id)->select(['appointment_id', 'id_specialty', 'id_doctor', 'appointment_date', 'id_status'])->get();
        return view('citas.index', compact('userAppointments'));
    }
    public function create()
    {
        $specialties = Specialty::select('specialty_id', 'name')->get();
        return view('citas.create', compact('specialties'));
    }
    public function getDoctorsBySpecialty($specialtyId)
    {
        $doctors = Third_Data::where('id_specialty', $specialtyId)->whereHas('user', function ($query) {
            $query->role('Doctor');
        })->with('user:id,id_third_data')->select('third_data_id', 'name', 'last_name')->get()->map(function ($doctor) {
            return [
                'user_id' => $doctor->user->id,
                'name' => $doctor->name,
                'last_name' => $doctor->last_name,
            ];
        });
        return response()->json($doctors);
    }
    public function store(AppointmentRequest $appointmentRequest)
    {
        Appointments::create([
            'id_patient' => auth()->user()->id,
            'id_specialty' => $appointmentRequest->id_specialty,
            'id_doctor' => $appointmentRequest->id_doctor,
            'appointment_date' => $appointmentRequest->appointment_date,
        ]);
        notify()->success('Cita agendar correctamente', 'Agendar Cita');
        return redirect()->route('appointments.index');
    }
    public function update(Appointments $appointment)
    {

    }
    public function destroy(Appointments $appointment)
    {
        $appointment->delete();
        notify()->success('Cita cancelada correctamente', 'Cancelar cita');
        return redirect()->route('appointments.index');
    }
}
