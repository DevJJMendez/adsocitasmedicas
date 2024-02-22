<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicalEntityRequest;
use App\Http\Requests\ThirdDataRequest;
use App\Models\Entity_Type_View;
use App\Models\Statu_View;
use App\Services\EntityDataService;
use App\Services\ThirdDataService;
use Illuminate\View\View;

use function Laravel\Prompts\select;

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

        notify()->success('Entidad médica agregada correctamente', 'Agregar entidad médica');
        return redirect()->route('medical.entities.view');
    }
}
