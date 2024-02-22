<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThirdDataRequest;
use App\Models\Medical_Entities;
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
        return view('medicalentities.index');
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
        
        Medical_Entities::create([
            'third_data_id' => $thirdDataRequest->data_id
        ]);

        notify()->success('Entidad médica agregada correctamente', 'Agregar entidad médica');
        return redirect()->route('medical.entities.view');
    }
}
