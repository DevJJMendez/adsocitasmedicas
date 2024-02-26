<?php
namespace App\Services;

use App\Models\Entity_Type_View;
use App\Models\Medical_Entities;
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
    public function createThirdDataForMedicalEntity(array $ThirdData): void
    {
        Third_Data::create($ThirdData);

        $latestDataId = Third_Data::latest()->first()->data_id;

        Medical_Entities::create([
            'third_data_id' => $latestDataId,
        ]);
    }
    public function getAllMedicalEntities()
    {
        $medicalEntity = Medical_Entities::with('medicalEntitythirdData')->get();
        return $medicalEntity;
    }
    public function getMedicalEntity(int $third_data_id)
    {
        $third_data_id = Third_Data::findOrFail($third_data_id);
        return $third_data_id;
    }

}