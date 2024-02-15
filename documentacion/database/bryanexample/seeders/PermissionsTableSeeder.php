<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crea un permiso de ejemplo
        Permission::create([
            'name' => 'Administrador',
            'guard_name' => 'sanctum',
            'estado' => 1, // Ajusta el valor según tus necesidades
        ]);
        Permission::create([
            'name' => 'Coordinacion',
            'guard_name' => 'sanctum',
            'estado' => 1, // Ajusta el valor según tus necesidades
        ]);
        Permission::create([
            'name' => 'Porteria',
            'guard_name' => 'sanctum',
            'estado' => 1, // Ajusta el valor según tus necesidades
        ]);
        Permission::create([
            'name' => 'Personal',
            'guard_name' => 'sanctum',
            'estado' => 1, // Ajusta el valor según tus necesidades
        ]);
        Permission::create([
            'name' => 'Usuarios',
            'guard_name' => 'sanctum',
            'estado' => 1, // Ajusta el valor según tus necesidades
        ]);
        Permission::create([
            'name' => 'Objetos',
            'guard_name' => 'sanctum',
            'estado' => 1, // Ajusta el valor según tus necesidades
        ]);
        Permission::create([
            'name' => 'Vehiculos',
            'guard_name' => 'sanctum',
            'estado' => 1, // Ajusta el valor según tus necesidades
        ]);
      
    }
}
