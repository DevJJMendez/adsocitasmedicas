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
    public function getAllMedicalEntities():Collection{
        return Medical_Entities::select('
        medical_entities.third_data_id as Id',
        'td.nit as Nit',
        'td.number_phone as Telefono',
        'etv.name as Tipo',
        'td.email as Email',
        'td.business_name as Nombre',
        'td.address as Dirección',
        'sv.name as Estado')->join('third_data as td', 'td.data_id', '=', 'medical_entities.third_data_id')
                                ->join('entity_type_views as etv', 'etv.detail_id', '=', 'td.entity_type_id')
                                    ->join('statu_views as sv', 'sv.detail_id', '=', 'td.statu_id')
                                        ->get();
    }
    public function createThirdDataForMedicalEntity(array $ThirdData):void
    {
        Third_Data::create($ThirdData);
        $latestDataId = Third_Data::latest()->first()->data_id;
        Medical_Entities::create([
            'third_data_id'=>$latestDataId,
        ]);
    }
}
