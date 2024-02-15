<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicoRequest;
use App\Models\User;

class MedicoController extends Controller
{
    public function index()
    {
        $medicos = User::medicos()->select('id', 'cedula', 'name', 'email')->paginate(10);
        return view('medicos.index', compact('medicos'));
    }
    public function create()
    {
        return view('medicos.create');
    }
    public function createNewMedico(MedicoRequest $medicoRequest)
    {
        User::create([
            'cedula' => $medicoRequest->cedula,
            'name' => $medicoRequest->name,
            'email' => $medicoRequest->email,
            'address' => $medicoRequest->address,
            'number_phone' => $medicoRequest->number_phone,
            'role' => 'medico',
            'password' => bcrypt($medicoRequest->password),
        ]);
        notify()->success('Médico agregado correctamente', 'Agregar Médico');
        return redirect()->route('medico.view');
    }
    public function edit($id)
    {
        $medicos = User::medicos()->findOrFail($id);
        return view('medicos.edit', compact('medicos'));
    }
    public function updateMedico($id, MedicoRequest $medicoRequest)
    {
        $medicos = User::medicos()->findOrFail($id);
        $medicos->update([
            'cedula' => $medicoRequest->cedula,
            'name' => $medicoRequest->name,
            'email' => $medicoRequest->email,
            'address' => $medicoRequest->address,
            'number_phone' => $medicoRequest->number_phone,
            'role' => 'medico',
            'password' => $medicoRequest->password ? bcrypt($medicoRequest->password) : $medicos->password,
        ]);
        notify()->success('Médico editado correctamente', 'Editar Médico');
        return redirect()->route('medico.view');
    }
    public function deleteMedico($id)
    {
        $medico = User::medicos()->findOrFail($id);
        $medico->delete();
        notify()->error('Médico eliminado correctamente', 'Eliminar Médico');
        return redirect()->route('medico.view');
    }
}
