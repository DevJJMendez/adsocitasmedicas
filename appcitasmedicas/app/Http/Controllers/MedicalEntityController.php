<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicalEntityRequest;
use App\Models\Entity_Type_View;
use App\Models\Statu_View;
use App\Services\EntityDataService;
use Illuminate\View\View;

use function Laravel\Prompts\select;

class MedicalEntityController extends Controller
{
    protected $entityDataService;
    public function __construct(EntityDataService $entityDataService){
        $this->entityDataService = $entityDataService;
    }
    public function showMedicalEntitiesView():view
    {
        return view('medicalentities.index');
    }
    public function showNewMecicalEntitiesView():view
    {
        $entitiesType = $this->entityDataService->getEntityTypes();
        $statuType = $this->entityDataService->getStatusTypes();
        return view('medicalentities.create',compact('entitiesType','statuType'));
    }
    public function createNewMedicalEntity(MedicalEntityRequest $medicalEntityRequest)
    {
        
    }
}
