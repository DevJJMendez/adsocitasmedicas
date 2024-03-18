<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicoRequest;
use App\Models\Document_Type_View;
use App\Models\Gender_View;
use App\Models\Medical_Entities;
use App\Models\Third_Data;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\Specialty;

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
        $specialties = Specialty::select(['specialty_id', 'name'])->get();
        $documentType = Document_Type_View::pluck('name', 'detail_id');
        $medicalEntity = Medical_Entities::select('medical_entity_id', 'business_name')->get();
        $genderType = Gender_View::pluck('name', 'detail_id');
        return view('medicos.create', compact('documentType', 'medicalEntity', 'genderType', 'specialties'));
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
            'id_specialty' => $medicoRequest->id_specialty
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
        $medicos = User::findOrFail($id);
        $tercero = $medicos->thirdDataUser;
        $specialties = Specialty::select(['specialty_id', 'name'])->get();
        $documentType = Document_Type_View::pluck('name', 'detail_id');
        $medicalEntity = Medical_Entities::select('medical_entity_id', 'business_name')->get();
        $genderType = Gender_View::pluck('name', 'detail_id');
        return view('medicos.edit', compact('medicos', 'tercero', 'documentType', 'medicalEntity', 'genderType'));
    }
    public function updateMedico($id, MedicoRequest $medicosRequest)
    {
        $medicos = User::findOrFail($id);
        $tercero = $medicos->thirdDataUser;
        $medicos->update([
            'email' => $medicosRequest->email,
        ]);
        $tercero->update([
            'identification_number' => $medicosRequest->identification_number,
            'name' => $medicosRequest->name,
            'last_name' => $medicosRequest->last_name,
            'email' => $medicosRequest->email,
            'id_medical_entity' => $medicosRequest->id_medical_entity,
            'gender_type_id' => $medicosRequest->gender_type_id,
            'address' => $medicosRequest->address,
            'birth_date' => $medicosRequest->birth_date,
            'number_phone' => $medicosRequest->number_phone,
            'id_specialty' => $medicosRequest->id_specialty
        ]);
        notify()->success('Medico editado correctamente', 'Editar Medico');
        return redirect()->route('medicos.view');
    }
    public function deleteMedico($id)
    {
        $medicos = User::findOrFail($id);
        $tercero = $medicos->thirdDataUser;
        if ($medicos->status == 1) {
            $medicos->update(['status' => 0]);
            $message = "Desactivado";
        } else {
            $medicos->delete();
            $message = "Eliminado";
        }
        notify()->error("El medico ha sido {$message} satisfactoriamente", "{$message} medico");
        return back();
    }
}
