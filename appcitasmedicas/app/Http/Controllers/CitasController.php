<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Models\Appointments;
use App\Models\Specialty;
use App\Models\Third_Data;
use Spatie\Permission\Models\Role;

class CitasController extends Controller
{
    public function index()
    {
        return view('citas.index');
    }
    public function create()
    {
        $specialties = Specialty::select('specialty_id', 'name')->get();
        return view('citas.create', compact('specialties'));
    }
    public function getDoctorsBySpecialty($specialtyId)
    {
        $doctors = Third_Data::where('id_specialty', $specialtyId)
            ->whereHas('user', function ($query) {
                $query->role('Doctor');
            })
            ->with('user:id,id_third_data') // Añadir la relación con el User para obtener su id
            ->select('third_data_id', 'name', 'last_name')
            ->get()
            ->map(function ($doctor) {
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
    // public function show()
    // {
    //     // obtengo el Id del usuario logueado
    //     $userId = auth()->user()->id;
    //     // Obtengo las citas medicas que tiene el usuario logueado
    //     $citas = Appointments::with('doctor', 'specialty', 'statutype')->where('id_patient', $userId)->whereIn('statu_type_id', [3, 4])->get();
    //     return view('citas.index', compact('citas'));
    // }
    // El paciente no puede aplazar citas
    public function destroy($appointment_id)
    {
        // Obtenemos la cita por su id
        $citaId = Appointments::findOrFail($appointment_id);
        // actualizamos el estado de la cita
        $citaId->update(['statu_type_id' => 5]);
        notify()->success('Cita cancelada correctamente', 'Cancelar cita');
        return redirect()->route('appointments.index');
    }
}
