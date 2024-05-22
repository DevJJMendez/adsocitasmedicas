<?php

namespace Database\Seeders;

use App\Models\CommonAttribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntityTypeSeeder extends Seeder
{
    public function run(): void
    {
        $commonAttribute = CommonAttribute::create([
            'name' => 'eps',
            'nomenclature' => null,
        ]);
        $commonAttribute->entityType()->create([
            'id_common_attribute' => $commonAttribute->common_attribute_id,
        ]);

        $commonAttribute = CommonAttribute::create([
            'name' => 'ips',
            'nomenclature' => null,
        ]);
        $commonAttribute->entityType()->create([
            'id_common_attribute' => $commonAttribute->common_attribute_id,
        ]);
    }
}
