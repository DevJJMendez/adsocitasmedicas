<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // Crea un usuario de ejemplo
          $user = User::create([
            'name' => 'Admin sisena',
            'email' => 'admin@sisena.com',
            'password' => bcrypt('admin2024.'), // Cambia esto por la contraseña que desees
            'estado' => 1, // Ajusta el valor según tus necesidades
        ]);

        $user2 = User::create([
            'name' => 'Test 01',
            'email' => 'test1@sisena.com',
            'password' => bcrypt('test01'), // Cambia esto por la contraseña que desees
            'estado' => 1, // Ajusta el valor según tus necesidades
        ]);

        // Asigna el rol de administrador al usuario
        $adminRole = Role::where('name', 'Administrador')->first();
        $user->assignRole($adminRole);
        $user2->assignRole($adminRole);

       // Asigna los permisos directamente al rol
        $adminRole->givePermissionTo('Administrador');
        $adminRole->givePermissionTo('Personal');
        $adminRole->givePermissionTo('Usuarios');
        $adminRole->givePermissionTo('Objetos');
        $adminRole->givePermissionTo('Vehiculos');

        $porteriaRole = Role::where('name', 'Porteria')->first();
        $porteriaRole->givePermissionTo('Porteria');
        $porteriaRole->givePermissionTo('Personal');
        $porteriaRole->givePermissionTo('Objetos');
        $porteriaRole->givePermissionTo('Vehiculos');

        $coordinacionRole = Role::where('name', 'Coordinacion')->first();
        $coordinacionRole->givePermissionTo('Coordinacion');
        $coordinacionRole->givePermissionTo('Personal');
        $coordinacionRole->givePermissionTo('Objetos');
        $coordinacionRole->givePermissionTo('Vehiculos');

    }
}
