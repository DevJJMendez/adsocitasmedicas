<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Doctor']);
        $role3 = Role::create(['name' => 'Paciente']);

        Permission::create(['name'=>'admin.home',
                'name' => 'Ver el dashboard'        ])->syncRoles($role1, $role2 , $role3);

        Permission::create(['name'=>'admin.users.index',
                'name' => 'Ver listado de usuarios'        ])->assignRole($role1);

        Permission::create(['name'=>'admin.users.edit',
                'name' => 'Asignar un rol'        ])->assignRole($role1);//solo el admin


        Permission::create(['name'=>'admin.especialidades.index',
                'name' => 'Ver listado de especialidades'        ])->assignRole($role1);

        Permission::create(['name'=>'admin.especialidades.create',
                'name' => 'Crear especialidades'        ])->assignRole($role1);

        Permission::create(['name'=>'admin.especialidades.edit',
                'name' => 'Editar especialidades'        ])->assignRole($role1);//solo el admin

        Permission::create(['name'=>'admin.especialidades.destroy',
                'name' => 'Eliminar especilidades'        ])->assignRole($role1); //solo el admin

        Permission::create(['name'=>'admin.medicos.index',
                'name' => 'Ver listado de medicos'        ])->assignRole($role1);

        Permission::create(['name'=>'admin.medicos.create',
                'name' => 'Crear medicos'        ])->assignRole($role1);

        Permission::create(['name'=>'admin.medicos.edit',
                'name' => 'Editar medicos'        ])->assignRole($role1);

        Permission::create(['name'=>'admin.medicos.destroy',
                'name' => 'Eliminar medicos'        ])->assignRole($role1);


        Permission::create(['name'=>'admin.pacientes.index',
                'name' => 'Ver listado de pacientes'        ])->assignRole($role1);

        Permission::create(['name'=>'admin.pacientes.create',
                'name' => 'Crear pacientes'        ])->syncRoles($role1, $role2);

        Permission::create(['name'=>'admin.pacientes.edit',
                'name' => 'Editar pacientes'        ])->assignRole($role1); //solo el admin

        Permission::create(['name'=>'admin.pacientes.destroy',
                'name' => 'Eliminar pacientes'        ])->assignRole($role1); //solo el admin
    }
}
