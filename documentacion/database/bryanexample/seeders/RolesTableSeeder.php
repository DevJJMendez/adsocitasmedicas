<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crea un rol de ejemplo
        Role::create([
            'name' => 'Administrador',
            'guard_name' => 'sanctum',
            'estado' => 1, // Ajusta el valor según tus necesidades
        ]);
        Role::create([
            'name' => 'Porteria',
            'guard_name' => 'sanctum',
            'estado' => 1, // Ajusta el valor según tus necesidades
        ]);
        Role::create([
            'name' => 'Coordinacion',
            'guard_name' => 'sanctum',
            'estado' => 1, // Ajusta el valor según tus necesidades
        ]);
    }
}
