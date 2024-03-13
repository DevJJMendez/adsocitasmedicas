<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Models\Appointments;
use App\Models\Specialty;
use Illuminate\Http\Request;    
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
        $medicos = $medicoRol->users()->with('thirdDataUser')->get();
        return view('citas.citas', compact('specialty', 'medicos', 'n_cita'));
    }
    public function create()
    {
        //
    }
    public function store(AppointmentRequest $data)
    {
        Appointments::create([
            // 'appointment_id' => $data->appointment_id,
            'id_patient' => $data->id_patient,
            'id_specialty' => $data->id_specialty,
            'id_doctor' => $data->id_doctor,
            'appointment_date' => $data->appointment_date,
            // 'statu_id' => $appointmentRequest->statu_id,
        ]);
        notify()->success('Paciente agregado correctamente', 'Agregar Paciente');
        return redirect()->route('citas.view');
    }
    public function show()
    {
        //
    }
    public function edit ()
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
