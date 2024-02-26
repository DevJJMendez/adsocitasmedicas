<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThirdDataRequest;
use App\Models\Document_Type_View;
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
        // $medicalEntities = $this->thirdDataService->getAllMedicalEntities();

        $medicalEntity = Third_Data::with('medicalentitytype', 'statutype')->get();
        return view('medicalentities.index', compact('medicalEntity'));
    }
    public function showNewMecicalEntitiesView(): view
    {
        // $entitiesType = $this->thirdDataService->getEntityTypes();
        // $statuType = $this->thirdDataService->getStatusTypes();
        // $dc = Document_Type_View::pluck('name', 'detail_id');
        $em = Entity_Type_View::pluck('name', 'detail_id');
        $es = Statu_View::pluck('nombre', 'detail_id');
        // $MedicalEntity = new Third_Data();
        return view('medicalentities.create', compact('em', 'es'));
    }
    public function createNewMedicalEntity(ThirdDataRequest $thirdDataRequest)
    {
        // $this->thirdDataService->createThirdDataForMedicalEntity($thirdDataRequest->all());
        $data = $thirdDataRequest->all();
        Third_Data::create($data);
        // Medical_Entities::create([
        //     'third_data_id' => $data['data_id'],
        // ]);
        notify()->success('Entidad médica agregada correctamente', 'Agregar entidad médica');
        return redirect()->route('medical.entities.view');
    }
    public function showEditMedicalEntitiesView($id): view
    {

        // $medicalEntity = $this->thirdDataService->getMedicalEntity($third_data_id);
        $entity = Third_Data::find($id);
        $em = Entity_Type_View::pluck('name', 'detail_id');
        $es = Statu_View::pluck('nombre', 'detail_id');
        return view('medicalentities.edit', compact('em', 'es', 'entity'));
    }

    public function showTestView(): view
    {
        $thirddata = Third_Data::with('documentType');
        dd($thirddata);
        return view('test.data');
    }
}
// $thirdData = Third_Data::with('statutype', 'medicalentitytype', 'medicalEntity')->first();
// $thirdData = Medical_Entities::with('thirddata')->first();
// $thirdData = Statu_View::with('thirddata')->first();
// $thirdData = Entity_Type_View::with('thirddataentitytype')->first();
// $thirdData = User::with('thirdData')->first();
// dd($thirdData);
