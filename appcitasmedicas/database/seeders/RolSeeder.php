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

        //PERMISOS DE USUARIOS
        Permission::create([
            'name' => 'admin.users.index',
            'name' => 'Ver listado de usuarios'
        ])->assignRole($role1);


        Permission::create([
            'name' => 'admin.users.edit',
            'name' => 'Asignar Roles a los usuario'
        ])->assignRole($role1);

        Permission::create([
            'name' => 'admin.users.delete',
            'name' => 'Eliminar usuarios'
        ])->assignRole($role1);

        //PERMISOS DE ENTIDADES MEDICAS
        Permission::create([
            'name' => 'admin.medical.entities.index',
            'name' => 'Ver listado de entidades médicas'
        ])->assignRole($role1);

        Permission::create([
            'name' => 'admin.medical.entities.create',
            'name' => 'Crear entidades médicas'
        ])->assignRole($role1);

        Permission::create([
            'name' => 'admin.medical.entities.edit',
            'name' => 'Editar entidades médicas'
        ])->assignRole($role1);

        Permission::create([
            'name' => 'admin.medical.entities.delete',
            'name' => 'Eliminar entidades médicas'
        ])->assignRole($role1);


        //PERMISO DE ESPECIALIDADES
        Permission::create([
            'name' => 'admin.specialty.index',
            'name' => 'Ver listado de especialidades'
        ])->assignRole($role1);

        Permission::create([
            'name' => 'admin.specialty.create',
            'name' => 'Crear especialidades'
        ])->assignRole($role1);

        Permission::create([
            'name' => 'admin.specialty.edit',
            'name' => 'Editar especialidades'
        ])->assignRole($role1);

        Permission::create([
            'name' => 'admin.specialty.delte',
            'name' => 'Eliminar especialidades'
        ])->assignRole($role1);

        //PERMISOS DE MEDICOS
        Permission::create([
            'name' => 'admin.medicos.index',
            'name' => 'Ver listado de médicos'
        ])->assignRole($role1);

        Permission::create([
            'name' => 'admin.medicos.create',
            'name' => 'Crear médicos'
        ])->assignRole($role1);

        Permission::create([
            'name' => 'admin.medicos.edit',
            'name' => 'Editar médicos'
        ])->assignRole($role1);

        Permission::create([
            'name' => 'admin.medicos.delete',
            'name' => 'Eliminar médicos'
        ])->assignRole($role1);

        //PERMISO DE PACIENTES
        Permission::create([
            'name' => 'admin.pacientes.index',
            'name' => 'Ver listado de pacientes'
        ])->assignRole($role1);

        Permission::create([
            'name' => 'admin.pacientes.create',
            'name' => 'Crear pacientes'
        ])->assignRole($role1);

        Permission::create([
            'name' => 'admin.pacientes.edit',
            'name' => 'Editar pacientes'
        ])->assignRole($role1);

        Permission::create([
            'name' => 'admin.pacientes.delete',
            'name' => 'Eliminar pacientes'
        ])->assignRole($role1);


        //PERMISO DE CITAS
        Permission::create([
            'name' => 'admin.citas.index',
            'name' => 'Ver listado de citas'
        ])->assignRole($role1 , $role2);

        Permission::create([
            'name' => 'admin.citas.create',
            'name' => 'Crear  citas'
        ])->assignRole($role1 , $role2 , $role3);

        Permission::create([
            'name' => 'admin.citas.edit',
            'name' => 'Editar citas'
        ])->assignRole($role1 , $role2 , $role3);

        Permission::create([
            'name' => 'admin.citas.delete',
            'name' => 'Eliminar citas citas'
        ])->assignRole($role1 , $role2 , $role3);



        //PERMISO DE ROLES
        Permission::create([
            'name' => 'admin.roles.index',
            'name' => 'Ver listado de roles'
        ])->assignRole($role1 );

        Permission::create([
            'name' => 'admin.roles.create',
            'name' => 'Crear roles'
        ])->assignRole($role1 );

        Permission::create([
            'name' => 'admin.roles.edit',
            'name' => 'Editar roles'
        ])->assignRole($role1 );

        Permission::create([
            'name' => 'admin.roles.delete',
            'name' => 'Eliminar roles'
        ])->assignRole($role1 );

         //PERMISOS
         Permission::create([
            'name' => 'admin.permisos.index',
            'name' => 'Ver listado de permisos'
        ])->assignRole($role1 );

        Permission::create([
            'name' => 'admin.permisos.create',
            'name' => 'Crear permisos'
        ])->assignRole($role1 );

        Permission::create([
            'name' => 'admin.permisos.edit',
            'name' => 'Editar permisos'
        ])->assignRole($role1 );

        Permission::create([
            'name' => 'admin.permisos.delete',
            'name' => 'Eliminar permisos'
        ])->assignRole($role1 );








    }
}
