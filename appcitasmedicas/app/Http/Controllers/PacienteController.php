<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacienteRequest;
use App\Http\Requests\PatientUpdateRequest;
use App\Models\Document_Type_View;
use App\Models\DocumentType;
use App\Models\Gender;
use App\Models\Gender_View;
use App\Models\Medical_Entities;
use App\Models\Third_Data;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Termwind\Components\Dd;

class PacienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:Administrador');
    }
    public function index()
    {
        $patients = User::role(['Paciente'])->with([
            'thirdData' => function ($query) {
                $query->select('third_data_id', 'id_document_type', 'identification_number', 'name', 'last_name', 'number_phone', 'birth_date', 'id_gender', 'address', 'id_medical_entity', 'id_status');
            },
            'thirdData.documentType' => function ($query) {
                $query->select('document_type_id', 'id_common_attribute');
            },
            'thirdData.documentType.commonAttribute' => function ($query) {
                $query->select('common_attribute_id', 'name');
            },
            'thirdData.status' => function ($query) {
                $query->select('status_id', 'id_common_attribute');
            },
            'thirdData.status.commonAttribute' => function ($query) {
                $query->select('common_attribute_id', 'name');
            },
            'thirdData.gender' => function ($query) {
                $query->select('gender_id', 'id_common_attribute');
            },
            'thirdData.gender.commonAttribute' => function ($query) {
                $query->select('common_attribute_id', 'name');
            },
            'thirdData.medicalEntity' => function ($query) {
                $query->select('medical_entity_id', 'business_name', 'id_entity_type');
            },
            'thirdData.medicalEntity.EntityType' => function ($query) {
                $query->select('entity_type_id', 'id_common_attribute');
            },
            'thirdData.medicalEntity.EntityType.commonAttribute' => function ($query) {
                $query->select('common_attribute_id', 'name');
            },
        ])->select('id', 'email', 'id_third_data')->latest()->paginate(10);
        return view('pacientes.index', compact('patients'));
    }
    public function create()
    {
        $medicalEntities = Medical_Entities::where('id_status', 1)->select('medical_entity_id', 'business_name')->get();
        $documentTypes = DocumentType::select('document_type_id', 'id_common_attribute')->with(['commonAttribute'])->get();
        $genderTypes = Gender::select('gender_id', 'id_common_attribute')->with(['commonAttribute'])->get();
        return view('pacientes.create', compact(['medicalEntities', 'documentTypes', 'genderTypes']));
    }
    public function store(PacienteRequest $pacienteRequest)
    {
        $thirdData = Third_Data::create([
            'id_document_type' => $pacienteRequest->id_document_type,
            'identification_number' => $pacienteRequest->identification_number,
            'name' => $pacienteRequest->name,
            'last_name' => $pacienteRequest->last_name,
            'number_phone' => $pacienteRequest->number_phone,
            'birth_date' => $pacienteRequest->birth_date,
            'id_gender' => $pacienteRequest->id_gender,
            'address' => $pacienteRequest->address,
            'id_medical_entity' => $pacienteRequest->id_medical_entity
        ]);
        User::create([
            'id_third_data' => $thirdData->third_data_id,
            'email' => $pacienteRequest->email,
            'password' => bcrypt($pacienteRequest->password),
        ])->assignRole('Paciente');
        notify()->success('Paciente agregado correctamente', 'Agregar Paciente');
        return redirect()->route('patients.index');
    }
    public function edit(Third_Data $patient)
    {
        $medicalEntities = Medical_Entities::where('id_status', 1)->select('medical_entity_id', 'business_name')->get();
        $documentTypes = DocumentType::select('document_type_id', 'id_common_attribute')->with(['commonAttribute'])->get();
        $genderTypes = Gender::select('gender_id', 'id_common_attribute')->with(['commonAttribute'])->get();
        return view('pacientes.edit', compact(['patient', 'medicalEntities', 'documentTypes', 'genderTypes']));
    }
    public function update(Third_Data $patient, PatientUpdateRequest $patientUpdateRequest)
    {
        $patient->update([
            'identification_number' => $patientUpdateRequest->identification_number,
            'name' => $patientUpdateRequest->name,
            'last_name' => $patientUpdateRequest->last_name,
            'number_phone' => $patientUpdateRequest->number_phone,
            'birth_date' => $patientUpdateRequest->birth_date,
            'id_gender' => $patientUpdateRequest->id_gender,
            'address' => $patientUpdateRequest->address,
            'id_medical_entity' => $patientUpdateRequest->id_medical_entity,
            'id_status' => $patientUpdateRequest->id_status
        ]);
        $patient->user()->update([
            'email' => $patientUpdateRequest->email,
            'password' => bcrypt($patientUpdateRequest->password),
        ]);
        notify()->success('Paciente editado correctamente', 'Editar Paciente');
        return redirect()->route('paciente.view');
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $tercero = $user->thirdDataUser;
        if ($tercero->statu_type_id == 1) {
            $tercero->update(['statu_type_id' => 2]);
            $message = "Eliminado";
        }
        notify()->error("El paciente ha sido {$message} satisfactoriamente", "{$message} Paciente");
        return back();
    }
}
