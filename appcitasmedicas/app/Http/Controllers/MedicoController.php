<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicoRequest;
use App\Models\Document_Type_View;
use App\Models\Gender_View;
use App\Models\Medical_Entities;
use App\Models\Third_Data;
use App\Models\User;
use Spatie\Permission\Models\Role;

class MedicoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:Administrador');
    }
    public function index()
    {
        $medicoRol = Role::where('name', 'Doctor')->first();
        $medicos = $medicoRol->users()->with('thirdDataUser')->get();
        return view('medicos.index', compact('medicos'));
    }
    public function create()
    {
        $documentType = Document_Type_View::pluck('name', 'detail_id');
        $medicalEntity = Medical_Entities::select('medical_entity_id', 'business_name')->get();
        $genderType = Gender_View::pluck('name', 'detail_id');
        return view('medicos.create' , compact('documentType', 'medicalEntity', 'genderType', ));
    }
    public function createNewMedico(MedicoRequest $medicoRequest)
    {

        $thirdData = Third_Data::create([
           //Cedula de ciudadania
            'document_type_id' => $medicoRequest->document_type_id,
            'identification_number' => $medicoRequest->identification_number,
            'first_name' => $medicoRequest->first_name,
            'id_medical_entity' => $medicoRequest->id_medical_entity,
            'gender_type_id' => $medicoRequest->gender_type_id,
            'address' => $medicoRequest->address,
            'birth_date' => $medicoRequest->birth_date,
            'number_phone' => $medicoRequest->number_phone,
        ]);
        User::create([
            'third_data_id' => $thirdData->data_id,
            'email' => $medicoRequest->email,
            'password' => $medicoRequest->password,
        ])->assignRole('Doctor');
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
            'email' => $medicoRequest->email,
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
