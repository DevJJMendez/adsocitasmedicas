<?php

namespace Database\Seeders;

use App\Models\CommonAttribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentTypeSeeder extends Seeder
{
    public function run(): void
    {
        $commonAttribute = CommonAttribute::create([
            'name' => 'cedula de ciudadania',
            'nomenclature' => 'cc',
        ]);
        $commonAttribute->documentType()->create([
            'id_common_attribute' => $commonAttribute->common_attribute_id,
        ]);

        $commonAttribute = CommonAttribute::create([
            'name' => 'tarjeta de identidad',
            'nomenclature' => 'cc',
        ]);
        $commonAttribute->documentType()->create([
            'id_common_attribute' => $commonAttribute->common_attribute_id,
        ]);

        $commonAttribute = CommonAttribute::create([
            'name' => 'registro civil',
            'nomenclature' => 'rc',
        ]);
        $commonAttribute->documentType()->create([
            'id_common_attribute' => $commonAttribute->common_attribute_id,
        ]);

        $commonAttribute = CommonAttribute::create([
            'name' => 'cedula de extranjeria',
            'nomenclature' => 'cce',
        ]);
        $commonAttribute->documentType()->create([
            'id_common_attribute' => $commonAttribute->common_attribute_id,
        ]);
    }
}
