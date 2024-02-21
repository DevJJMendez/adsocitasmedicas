<?php

namespace App\Http\Controllers;

use App\Models\Document_Type_View;
use App\Models\Entity_Type_View;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MedicalEntityController extends Controller
{
    public function showMedicalEntitiesView():view
    {
        return view('medicalentities.index');
    }
    public function showNewMecicalEntitiesView():view
    {
        $entitiesType = Document_Type_View::select('document_id','name')->get();
        return view('medicalentities.create',compact('entitiesType'));
    }
    public function createNewMedicalEntity()
    {

    }

}
