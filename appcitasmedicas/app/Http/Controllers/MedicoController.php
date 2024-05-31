<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicoRequest;
use App\Models\DocumentType;
use App\Models\Gender;
use App\Models\Gender_View;
use App\Models\Medical_Entities;
use App\Models\Third_Data;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\Specialty;
use App\Models\Status;

class MedicoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:Administrador');
    }
    public function index()
    {
        $medicos = User::role('Doctor')->with([
            'thirdData:third_data_id,id_document_type,identification_number,name,last_name,number_phone,id_gender,address,id_specialty,id_status',
            'thirdData.documentType:document_type_id,id_common_attribute',
            'thirdData.documentType.commonAttribute:common_attribute_id,name',
            'thirdData.status:status_id,id_common_attribute',
            'thirdData.status.commonAttribute:common_attribute_id,name',
            'thirdData.gender:gender_id,id_common_attribute',
            'thirdData.gender.commonAttribute:common_attribute_id,name',
            'thirdData.medicalEntity.EntityType.commonAttribute:common_attribute_id,name',
        ])->select('id', 'email', 'id_third_data')->latest()->get();
        return view('medicos.index', compact('medicos'));
    }
    public function create()
    {
        $specialties = Specialty::select(['specialty_id', 'name'])->get();
        $statuses = Status::whereIn('status_id', [1, 2])->select('status_id', 'id_common_attribute')->with(['commonAttribute'])->get();
        $medicalEntities = Medical_Entities::where('id_status', 1)->select('medical_entity_id', 'business_name')->get();
        $documentTypes = DocumentType::whereIn('document_type_id', [1, 4])->select('document_type_id', 'id_common_attribute')->with(['commonAttribute'])->get();
        $genderTypes = Gender::select('gender_id', 'id_common_attribute')->with(['commonAttribute'])->get();
        return view('medicos.create', compact(['specialties', 'statuses', 'medicalEntities', 'documentTypes', 'genderTypes']));
    }
    public function store(MedicoRequest $medicoRequest)
    {
        $thirdData = Third_Data::create([
            'id_document_type' => $medicoRequest->id_document_type,
            'identification_number' => $medicoRequest->identification_number,
            'name' => $medicoRequest->name,
            'last_name' => $medicoRequest->last_name,
            'number_phone' => $medicoRequest->number_phone,
            'birth_date' => $medicoRequest->birth_date,
            'id_gender' => $medicoRequest->id_gender,
            'address' => $medicoRequest->address,
            'id_specialty' => $medicoRequest->id_specialty,
        ]);
        User::create([
            'id_third_data' => $thirdData->third_data_id,
            'email' => $medicoRequest->email,
            'password' => bcrypt($medicoRequest->password),
        ])->assignRole('Doctor');
        notify()->success('Médico agregado correctamente', 'Agregar Médico');
        return redirect()->route('medicos.index');
    }
    // TODO: CREAR METODO
    public function edit(Third_Data $medico)
    {
        $specialties = Specialty::select(['specialty_id', 'name'])->get();
        $statuses = Status::whereIn('status_id', [1, 2])->select('status_id', 'id_common_attribute')->with(['commonAttribute'])->get();
        $medicalEntities = Medical_Entities::where('id_status', 1)->select('medical_entity_id', 'business_name')->get();
        $documentTypes = DocumentType::select('document_type_id', 'id_common_attribute')->with(['commonAttribute'])->get();
        $genders = Gender::select('gender_id', 'id_common_attribute')->with(['commonAttribute'])->get();
        return view('medicos.edit', compact(['medico', 'specialties', 'statuses', 'medicalEntities', 'documentTypes', 'genders']));
    }
    // TODO: CREAR METODO
    public function update($id, MedicoRequest $medicosRequest)
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
    // TODO: CREAR METODO
    public function destroy($id)
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
