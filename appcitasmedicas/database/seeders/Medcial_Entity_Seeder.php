<?php

namespace Database\Seeders;

use App\Models\Medical_Entities;
use App\Models\Third_Data;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Medcial_Entity_Seeder extends Seeder
{
    public function run(): void
    {
        $nitAleatorio=rand(100000000, 999999999);
        // EPS
        $thirddata = Third_Data::create([
            'nit'=>$nitAleatorio,
            'number_phone'=>'01 8000 123703​',
            'mail'=>'aliansalud@gmail.com',
            'entity_type_id'=>14,
            'business_name'=>'ALIANSALUD ENTIDAD PROMOTORA DE SALUD S.A.',
            'address'=>'Cr 65 11-50, Piso 2, Lc 2-87 y 2-88
            Plaza Central',
            'statu_id'=>1,
        ]);

        $data_id = $thirddata->data_id;

        Medical_Entities::create([
            'third_data_id' => $data_id
        ]);
        $thirddata = Third_Data::create([
            'nit'=>$nitAleatorio,
            'number_phone'=>'018000 962 780',
            'mail'=>'atencioninicialdeurgencias@epsianaswayuu.com',
            'entity_type_id'=>14,
            'business_name'=>'ANASWAYUU',
            'address'=>'Carrera 16 No. 16 - 31',
            'statu_id'=>1,
        ]);
        $data_id = $thirddata->data_id;
        
        Medical_Entities::create([
            'third_data_id' => $data_id
        ]);
        $thirddata = Third_Data::create([
            'nit'=>$nitAleatorio,
            'number_phone'=>'018000-930155',
            'mail'=>'notificacionesjudiciales@aicsalud.org.co',
            'entity_type_id'=>14,
            'business_name'=>'ASOCIACIÓN INDÍGENA DEL CAUCA',
            'address'=>'Calle 1 # 4-66, Barrio Vasquez',
            'statu_id'=>1,
        ]);
        $data_id = $thirddata->data_id;
        
        Medical_Entities::create([
            'third_data_id' => $data_id
        ]);
        $thirddata = Third_Data::create([
            'nit'=>$nitAleatorio,
            'number_phone'=>'018000116882',
            'mail'=>'afiliacion@mutualser.com',
            'entity_type_id'=>14,
            'business_name'=>'ASOCIACION MUTUAL SER EMPRESA SOLIDARIA DE SALUD EPS',
            'address'=>'Carretera. Troncal No. 71B – 105',
            'statu_id'=>1,
        ]);
       $data_id = $thirddata->data_id;
        
        Medical_Entities::create([
            'third_data_id' => $data_id
        ]);
        $thirddata = Third_Data::create([
            'nit'=>$nitAleatorio,
            'number_phone'=>'018000915202',
            'mail'=>'compensar@gmail.com',
            'entity_type_id'=>14,
            'business_name'=>'COMPENSAR E.P.S.',
            'address'=>'Avenida 68 # 49A-47',
            'statu_id'=>1,
        ]);
        $data_id = $thirddata->data_id;
        
        Medical_Entities::create([
            'third_data_id' => $data_id
        ]);
        $thirddata = Third_Data::create([
            'nit'=>$nitAleatorio,
            'number_phone'=>'018000117636',
            'mail'=>'sanitas@gmail.com',
            'entity_type_id'=>14,
            'business_name'=>'E.P.S. SANITAS S.A.',
            'address'=>'Carretera. Troncal No. 32B – 172',
            'statu_id'=>1,
        ]);
        $data_id = $thirddata->data_id;
        
        Medical_Entities::create([
            'third_data_id' => $data_id
        ]);
        $thirddata = Third_Data::create([
            'nit'=>$nitAleatorio,
            'number_phone'=>'018000938777',
            'mail'=>'notificacionesjudiciales@sos.com.co',
            'entity_type_id'=>14,
            'business_name'=>'EPS SERVICIO OCCIDENTAL DE SALUD S.A.',
            'address'=>'Calle 23 AN 3N-57',
            'statu_id'=>1,
        ]);
        $data_id = $thirddata->data_id;
        
        Medical_Entities::create([
            'third_data_id' => $data_id
        ]);
        $thirddata = Third_Data::create([
            'nit'=>$nitAleatorio,
            'number_phone'=>'018000519519',
            'mail'=>'notificacionesjudiciales@suramericana.com.co',
            'entity_type_id'=>14,
            'business_name'=>'EPS Y MEDICINA PREPAGADA SURAMERICANA S.A',
            'address'=>'Carrera 49 C # 80 - 176',
            'statu_id'=>1,
        ]);
        $data_id = $thirddata->data_id;
        
        Medical_Entities::create([
            'third_data_id' => $data_id
        ]);
        $thirddata = Third_Data::create([
            'nit'=>$nitAleatorio,
            'number_phone'=>'018000980001',
            'mail'=>'contacto@saludmia.org',
            'entity_type_id'=>14,
            'business_name'=>'FUNDACIÓN SALUD MIA EPS',
            'address'=>'Carrera 49 C # 23-22',
            'statu_id'=>1,
        ]);
        $data_id = $thirddata->data_id;
        
        Medical_Entities::create([
            'third_data_id' => $data_id
        ]);
        $thirddata = Third_Data::create([
            'nit'=>$nitAleatorio,
            'number_phone'=>'018000930100',
            'mail'=>'nuevaeps@gmail.org',
            'entity_type_id'=>14,
            'business_name'=>'NUEVA EPS S.A.',
            'address'=>'Carrera 85K No. 46A-66',
            'statu_id'=>1,
        ]);
        $data_id = $thirddata->data_id;
        Medical_Entities::create([
            'third_data_id' => $data_id
        ]);
        
        $thirddata = Third_Data::create([
            'nit'=>$nitAleatorio,
            'number_phone'=>'018000 114524',
            'mail'=>'saludtotal@gmail.org',
            'entity_type_id'=>14,
            'business_name'=>'SALUD TOTAL S.A. E.P.S.',
            'address'=>'Carrera 100a No. 63A-92',
            'statu_id'=>1,
        ]);
        Medical_Entities::create([
            'third_data_id' => $thirddata->data_id
        ]);

        // IPS
        $thirddata = Third_Data::create([
            'nit'=>$nitAleatorio,
            'number_phone'=>'018000765874​',
            'mail'=>'santafe@gmail.com',
            'entity_type_id'=>15,
            'business_name'=>'Fundacion Santa Fe',
            'address'=>'Cr 65 11-50',
            'statu_id'=>1,
        ]);
        $data_id = $thirddata->data_id;
        Medical_Entities::create([
            'third_data_id' => $data_id
        ]);
        $thirddata = Third_Data::create([
            'nit'=>$nitAleatorio,
            'number_phone'=>'0180006547830',
            'mail'=>'hpablotobon@epsianaswayuu.com',
            'entity_type_id'=>15,
            'business_name'=>'Hospital Pablo Tobon',
            'address'=>'Carrera 16 No. 16 - 31',
            'statu_id'=>1,
        ]);
        $data_id = $thirddata->data_id;
        Medical_Entities::create([
            'third_data_id' => $data_id
        ]);

        $thirddata = Third_Data::create([
            'nit'=>$nitAleatorio,
            'number_phone'=>'018000234563',
            'mail'=>'clinicashaio@org.co',
            'entity_type_id'=>15,
            'business_name'=>'Fundacion Clinica Shaio',
            'address'=>'Calle 1 # 4-66-727',
            'statu_id'=>1,
        ]);
        $data_id = $thirddata->data_id;
        Medical_Entities::create([
            'third_data_id' => $data_id
        ]);

        $thirddata = Third_Data::create([
            'nit'=>$nitAleatorio,
            'number_phone'=>'0180009874566',
            'mail'=>'clinica@colsanitas.com',
            'entity_type_id'=>15,
            'business_name'=>'Clinica Colsanitas',
            'address'=>'Troncal No. 22B – 105',
            'statu_id'=>1,
        ]);
        $data_id = $thirddata->data_id;
        Medical_Entities::create([
            'third_data_id' => $data_id
        ]);

        $thirddata = Third_Data::create([
            'nit'=>$nitAleatorio,
            'number_phone'=>'018000625341',
            'mail'=>'sanjose@gmail.com',
            'entity_type_id'=>15,
            'business_name'=>'Hospital San Jose',
            'address'=>'Avenida 68 # 49A-47',
            'statu_id'=>1,
        ]);
        $data_id = $thirddata->data_id;
        Medical_Entities::create([
            'third_data_id' => $data_id
        ]);
    }
}
