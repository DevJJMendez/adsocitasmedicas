<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicalEntityRequest;
use App\Http\Requests\ThirdDataRequest;
use App\Models\Entity_Type_View;
use App\Models\Medical_Entities;
use App\Models\Statu_View;

use Illuminate\View\View;

class MedicalEntityController extends Controller
{
    public function index(): view
    {
        $medicalEntity = Medical_Entities::with('medicalentitytype', 'statutype')->paginate(6);
        return view('medicalentities.index', compact('medicalEntity'));
    }
    public function create(): view
    {
        $entityType = Entity_Type_View::pluck('name', 'detail_id');
        $statuType = Statu_View::pluck('name', 'detail_id');
        return view('medicalentities.create', compact('entityType', 'statuType'));
    }
    public function store(MedicalEntityRequest $medicalEntityRequest)
    {
        $medicalEntity = $medicalEntityRequest->all();

        Medical_Entities::create($medicalEntity);

        notify()->success('Entidad médica agregada correctamente', 'Agregar entidad médica');
        return redirect()->route('medical.entities.view');
    }
    public function edit($id): view
    {
        $entity = Medical_Entities::find($id);
        $entityType = Entity_Type_View::pluck('name', 'detail_id');
        $statuType = Statu_View::pluck('name', 'detail_id');
        return view('medicalentities.edit', compact('entityType', 'statuType', 'entity'));
    }
}

