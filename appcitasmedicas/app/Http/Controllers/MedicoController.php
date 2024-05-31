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
use Exception;
use Illuminate\Support\Facades\DB;

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
            'address' => $medicoRequest->address,
            'id_gender' => $medicoRequest->id_gender,
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
    public function edit(Third_Data $medico)
    {
        $specialties = Specialty::select(['specialty_id', 'name'])->get();
        $statuses = Status::whereIn('status_id', [1, 2])->select('status_id', 'id_common_attribute')->with(['commonAttribute'])->get();
        $medicalEntities = Medical_Entities::where('id_status', 1)->select('medical_entity_id', 'business_name')->get();
        $documentTypes = DocumentType::whereIn('document_type_id', [1, 4])->select('document_type_id', 'id_common_attribute')->with(['commonAttribute'])->get();
        $genders = Gender::select('gender_id', 'id_common_attribute')->with(['commonAttribute'])->get();
        return view('medicos.edit', compact(['medico', 'specialties', 'statuses', 'medicalEntities', 'documentTypes', 'genders']));
    }
    public function update(Third_Data $medico, MedicoRequest $medicoRequest)
    {
        DB::beginTransaction();
        try {
            $medico->fill($medicoRequest->only([
                'id_document_type',
                'identification_number',
                'name',
                'last_name',
                'number_phone',
                'birth_date',
                'id_gender',
                'address',
                'id_status',
                'id_specialty',
            ]));
            if ($medico->isDirty()) {
                $medico->save();
            }
            $user = $medico->user;
            if ($user) {
                $user->fill($medicoRequest->only(['email']));
                $user->password = bcrypt($medicoRequest->password);
                if ($user->isDirty()) {
                    $user->save();
                }
            }
            DB::commit();
            notify()->success('Médico editado correctamente', 'Editar médico');
            return redirect()->route('medicos.index');
        } catch (Exception $exception) {
            DB::rollBack();
            dd($exception);
            notify()->error('Error al editar médico', 'Error');
            return redirect()->back()->withErrors(['error' => 'Error al editar médico: ' . $exception->getMessage()]);
        }
    }
    public function destroy(Third_Data $medico)
    {
        if ($medico->id_status == 1) {
            $medico->update(['id_status' => 2]);
            notify()->warning("El medico ha sido desactivado correctamente", 'Desactivado');
            return back();
        } else {
            $medico->update(['id_status' => 1]);
            notify()->success("El medico ha sido activado correctamente", 'Activado');
            return back();
        }
    }
}
