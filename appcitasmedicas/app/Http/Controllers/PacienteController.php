<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacienteRequest;
use App\Models\User;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index()
    {
        $pacientes = User::pacientes()->select('id', 'cedula', 'name', 'email')->paginate(10);
        return view('pacientes.index', compact('pacientes'));
    }
    public function create()
    {
        return view('pacientes.create');
    }
    public function createNewPaciente(PacienteRequest $pacienteRequest)
    {
        User::create([
            'cedula' => $pacienteRequest->cedula,
            'name' => $pacienteRequest->name,
            'email' => $pacienteRequest->email,
            'address' => $pacienteRequest->address,
            'number_phone' => $pacienteRequest->number_phone,
            'role' => 'paciente',
            'password' => bcrypt($pacienteRequest->password),
        ]);
        notify()->success('Paciente agregado correctamente', 'Agregar Paciente');
        return redirect()->route('paciente.view');
    }
    public function edit($id)
    {
        $pacientes = User::pacientes()->findOrFail($id);
        return view('pacientes.edit', compact('pacientes'));
    }
    public function updatePaciente($id, PacienteRequest $pacienteRequest)
    {
        $pacientes = User::pacientes()->findOrFail($id);
        $pacientes->update([
            'cedula' => $pacienteRequest->cedula,
            'name' => $pacienteRequest->name,
            'email' => $pacienteRequest->email,
            'address' => $pacienteRequest->address,
            'number_phone' => $pacienteRequest->number_phone,
            'role' => 'paciente',
            'password' => $pacienteRequest->password ? bcrypt($pacienteRequest->password) : $pacientes->password,
        ]);
        notify()->success('Paciente editado correctamente', 'Editar Paciente');
        return redirect()->route('paciente.view');
    }
    public function deletePaciente($id){
        $paciente = User::pacientes()->findOrFail($id);
        $paciente->delete();
        notify()->error('Paciente eliminado correctamente', 'Eliminar Paciente');
        return redirect()->route('paciente.view');
    }
}
