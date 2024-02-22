<?php
namespace App\Services;

use App\Models\Entity_Type_View;
use App\Models\Statu_View;
use App\Models\Third_Data;
use Illuminate\Database\Eloquent\Collection;

class ThirdDataService
{
    public function getEntityTypes(): Collection
    {
        return Entity_Type_View::select('detail_id', 'name')->get();
    }

    public function getStatusTypes(): Collection
    {
        return Statu_View::select('detail_id', 'name')->whereIn('detail_id', [1, 2])->get();
    }
    public function createThirdDataForMedicalEntity(array $ThirdData): Third_Data
    {
        
        return Third_Data::create($ThirdData);
    }
}
