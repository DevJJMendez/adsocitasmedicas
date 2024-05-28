<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacienteRequest;
use App\Models\Document_Type_View;
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
        ])->select('id', 'email', 'id_third_data')->paginate(10);
        return view('pacientes.index', compact('patients'));
    }
    public function create()
    {
        // $documentType = Document_Type_View::pluck('name', 'detail_id');
        // $medicalEntity = Medical_Entities::select('medical_entity_id', 'business_name')->get();
        // $genderType = Gender_View::pluck('name', 'detail_id');
        // return view('pacientes.create', compact('documentType', 'medicalEntity', 'genderType', ));
    }
    public function store(PacienteRequest $pacienteRequest)
    {

        $thirdData = Third_Data::create([
            'document_type_id' => $pacienteRequest->document_type_id,
            'identification_number' => $pacienteRequest->identification_number,
            'first_name' => $pacienteRequest->first_name,
            'second_name' => $pacienteRequest->second_name,
            'sur_name' => $pacienteRequest->sur_name,
            'second_sur_name' => $pacienteRequest->second_sur_name,
            'number_phone' => $pacienteRequest->number_phone,
            'birth_date' => $pacienteRequest->birth_date,
            'gender_type_id' => $pacienteRequest->gender_type_id,
            'address' => $pacienteRequest->address,
            'id_medical_entity' => $pacienteRequest->id_medical_entity
        ]);
        User::create([
            'third_data_id' => $thirdData->data_id,
            'email' => $pacienteRequest->email,
            'password' => bcrypt($pacienteRequest->password),
        ])->assignRole('Paciente');
        notify()->success('Paciente agregado correctamente', 'Agregar Paciente');
        return redirect()->route('paciente.view');
    }
    public function edit($id)
    {
        // $user = User::findOrFail($id);
        // $tercero = $user->thirdDataUser;

        // $documentType = Document_Type_View::pluck('name', 'detail_id');
        // $medicalEntity = Medical_Entities::select('medical_entity_id', 'business_name')->get();
        // $genderType = Gender_View::pluck('name', 'detail_id');
        // return view('pacientes.edit', compact('user', 'tercero', 'documentType', 'medicalEntity', 'genderType'));
    }
    public function update($id, PacienteRequest $pacienteRequest)
    {
        $user = User::findOrFail($id);
        $tercero = $user->thirdDataUser;
        $user->update([
            'email' => $pacienteRequest->email,
        ]);
        $tercero->update([
            'identification_number' => $pacienteRequest->identification_number,
            'first_name' => $pacienteRequest->first_name,
            'second_name' => $pacienteRequest->second_name,
            'sur_name' => $pacienteRequest->sur_name,
            'second_sur_name' => $pacienteRequest->second_sur_name,
            'number_phone' => $pacienteRequest->number_phone,
            'birth_date' => $pacienteRequest->birth_date,
            'gender_type_id' => $pacienteRequest->gender_type_id,
            'address' => $pacienteRequest->address,
            'id_medical_entity' => $pacienteRequest->id_medical_entity
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
