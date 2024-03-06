<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacienteRequest;
use App\Models\User;
use Spatie\Permission\Models\Role;

class PacienteController extends Controller
{


    public function __construct()
    {
        $this->middleware('can:Administrador');
    }

    public function index()
    {
        $pacienteRol = Role::where('name', 'Paciente')->first();
        $pacientes = $pacienteRol->users()->with('thirdDataUser')->get();
        return view('pacientes.index', compact('pacientes'));
    }
    public function create()
    {
        return view('pacientes.create');
    }
    public function createNewPaciente(PacienteRequest $pacienteRequest)
    {
        User::create([
            'email' => $pacienteRequest->email,
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
            'email' => $pacienteRequest->email,
            'role' => 'paciente',
            'password' => $pacienteRequest->password ? bcrypt($pacienteRequest->password) : $pacientes->password,
        ]);
        notify()->success('Paciente editado correctamente', 'Editar Paciente');
        return redirect()->route('paciente.view');
    }
    public function deletePaciente($id)
    {
        $paciente = User::pacientes()->findOrFail($id);
        $paciente->delete();
        notify()->error('Paciente eliminado correctamente', 'Eliminar Paciente');
        return redirect()->route('paciente.view');
    }
}
