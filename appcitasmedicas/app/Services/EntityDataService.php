<?php
namespace App\Services;
use App\Models\Entity_Type_View;
use App\Models\Medical_Entities;
use App\Models\Statu_View;
use App\Models\Third_Data;
use Illuminate\Database\Eloquent\Collection;

class EntityDataService{
  public function getEntityTypes():Collection
  {
      return Entity_Type_View::select('detail_id','name')->get();
  }

  public function getStatusTypes():Collection
  {
      return Statu_View::select('detail_id','name')->whereIn('detail_id',[1,2])->get();
  }
  public function createThirdDataForMedicalEntity(array $thirdDataAttributes):Third_Data
  {
    $thirdData = Third_Data::create($thirdDataAttributes);
    $this->createMedicalEntityWithThirdData(['data_id' => $thirdData->data_id]);
    return $thirdData;
  }
  public function createMedicalEntityWithThirdData(array $medicalEntityAttributes):Medical_Entities{
    return Medical_Entities::create([
      'third_data_id'=>$medicalEntityAttributes['data_id'],
    ]);
  }
}