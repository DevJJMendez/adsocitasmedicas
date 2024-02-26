<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThirdDataRequest;
use App\Models\Entity_Type_View;
use App\Models\Medical_Entities;
use App\Models\Statu_View;
use App\Models\Third_Data;
use App\Models\User;
use App\Services\ThirdDataService;
use Illuminate\View\View;

class MedicalEntityController extends Controller
{
    protected $thirdDataService;
    public function __construct(ThirdDataService $thirdDataService)
    {
        $this->thirdDataService = $thirdDataService;
    }
    public function showMedicalEntitiesView(): view
    {
        $medicalEntities = $this->thirdDataService->getAllMedicalEntities();
        return view('medicalentities.index', compact('medicalEntities'));
        // return view('medicalentities.index');
    }
    public function showNewMecicalEntitiesView(): view
    {
        $entitiesType = $this->thirdDataService->getEntityTypes();
        $statuType = $this->thirdDataService->getStatusTypes();
        return view('medicalentities.create', compact('entitiesType', 'statuType'));
    }
    public function createNewMedicalEntity(ThirdDataRequest $thirdDataRequest)
    {
        $this->thirdDataService->createThirdDataForMedicalEntity($thirdDataRequest->all());
        notify()->success('Entidad médica agregada correctamente', 'Agregar entidad médica');
        return redirect()->route('medical.entities.view');
    }
    public function showEditMedicalEntitiesView($third_data_id): view
    {
        $medicalEntity = $this->thirdDataService->getMedicalEntity($third_data_id);
        return view('medicalentities.edit', compact('medicalEntity'));
    }

    public function showTestView(): view
    {
        $thirdData = User::with('thirdDataUser')->first();
        dd($thirdData);
        return view('test.data');
    }
}
// $thirdData = Third_Data::with('statutype', 'medicalentitytype', 'medicalEntity')->first();
// $thirdData = Medical_Entities::with('thirddata')->first();
// $thirdData = Statu_View::with('thirddata')->first();
// $thirdData = Entity_Type_View::with('thirddataentitytype')->first();
// $thirdData = User::with('thirdData')->first();
// dd($thirdData);