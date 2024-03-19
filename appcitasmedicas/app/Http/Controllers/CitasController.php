<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Models\Appointments;
use App\Models\Specialty;
use Spatie\Permission\Models\Role;

class CitasController extends Controller
{
    public function index()
    {
        //variable para mostrar el numero de cita.
        $n_cita = Appointments::select('appointment_id')->get();
        //variable para mostrar las especialidades.
        $specialty = Specialty::select('specialty_id', 'name')->get();
        //variable para mostrar medicos.
        $medicoRol = Role::where('name', 'Doctor')->first();
        $medicos = $medicoRol->users()->with('thirdDataUser.specialty')->get();
        return view('citas.citas', compact('specialty', 'medicos', 'n_cita'));
    }
    public function create()
    {
        //variable para mostrar el numero de cita.
        $n_cita = Appointments::select('appointment_id')->get();
        //variable para mostrar las especialidades.
        $specialty = Specialty::select('specialty_id', 'name')->get();
        //variable para mostrar medicos.
        $medicoRol = Role::where('name', 'Doctor')->first();
        $medicos = $medicoRol->users()->with('thirdDataUser.specialty')->get();
        return view('citas.create', compact('specialty', 'medicos', 'n_cita'));
    }
    public function store(AppointmentRequest $appointmentRequest)
    {
        Appointments::create([
            'id_patient' => $appointmentRequest->id_patient,
            'id_specialty' => $appointmentRequest->id_specialty,
            'id_doctor' => $appointmentRequest->id_doctor,
            'appointment_date' => $appointmentRequest->appointment_date,
        ]);
        notify()->success('Paciente agregado correctamente', 'Agregar Paciente');
        return redirect()->route('citas.view');
    }
    public function mostrarCitasAgendadas()
    {
        $citas = Appointments::with('doctor', 'specialty')->get();
        return view('citas.citasAgendadas', compact('citas'));
    }
    public function edit()
    {
        //
    }
    public function update()
    {
        //
    }
    public function destroy()
    {
        //
    }
}
