<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicalEntityRequest;
use App\Http\Requests\ThirdDataRequest;
use App\Models\Entity_Type_View;
use App\Models\EntityType;
use App\Models\Medical_Entities;
use App\Models\Statu_View;
use App\Models\Status;
use Illuminate\View\View;

class MedicalEntityController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:Administrador');
    }
    public function index(): view
    {
        $medicalEntities = Medical_Entities::select('medical_entity_id', 'business_name', 'nit', 'email', 'number_phone', 'address', 'id_status', 'id_entity_type')->with([
            'status' => function ($query) {
                $query->select('status_id', 'id_common_attribute');
            },
            'status.commonAttribute' => function ($query) {
                $query->select('common_attribute_id', 'name');
            },
            'entityType' => function ($query) {
                $query->select('entity_type_id', 'id_common_attribute');
            },
            'entityType.commonAttribute' => function ($query) {
                $query->select('common_attribute_id', 'name');
            },
        ])->paginate(10);
        return view('medicalentities.index', compact('medicalEntities'));
    }
    public function create(): view
    {
        $entityType = EntityType::select('entity_type_id', 'id_common_attribute')->with([
            'commonAttribute' => function ($query) {
                $query->select('common_attribute_id', 'name');
            }
        ])->get();
        $statuses = Status::select('status_id', 'id_common_attribute')->with([
            'commonAttribute' => function ($query) {
                $query->select('common_attribute_id', 'name');
            }
        ]);
        return view('medicalentities.create', compact('entityType', 'statuses'));
    }
    public function store(MedicalEntityRequest $medicalEntityRequest)
    {
        $medicalEntity = $medicalEntityRequest->all();
        Medical_Entities::create($medicalEntity);
        notify()->success('Entidad médica agregada correctamente', 'Agregar entidad médica');
        return redirect()->route('medical-entities.index');
    }
    public function edit(Medical_Entities $medical_entity): view
    {
        $entityTypes = EntityType::select('entity_type_id', 'id_common_attribute')->with([
            'commonAttribute' => function ($query) {
                $query->select('common_attribute_id', 'name');
            }
        ])->get();
        $statuses = Status::whereIn('status_id', [1, 2])->select('status_id', 'id_common_attribute')->with([
            'commonAttribute' => function ($query) {
                $query->select('common_attribute_id', 'name');
            }
        ])->get();
        return view('medicalentities.edit', compact('entityTypes', 'statuses', 'medical_entity'));
    }
    public function update(MedicalEntityRequest $medicalEntityRequest, Medical_Entities $medicalEntity)
    {
        $medicalEntity->update($medicalEntityRequest->all());
        notify()->success('Entidad médica editada correctamente', 'Editar');
        return redirect()->route('medical-entities.index');
    }
    public function destroy(Medical_Entities $medical_entity)
    {
        if ($medical_entity->id_status == 1) {
            $medical_entity->update(['id_status' => 2]);
            notify()->warning('La entidad médica se desactivo correctamente', 'Desactivada');
            return back();
        } else {
            $medical_entity->update(['id_status' => 1]);
            notify()->success('La entidad médica ha sido activada correctamente', 'Activada');
            return back();
        }
    }
}
