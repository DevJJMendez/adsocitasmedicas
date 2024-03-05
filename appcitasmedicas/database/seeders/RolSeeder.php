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
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Doctor']);
        $role3 = Role::create(['name' => 'Paciente']);

        Permission::create([

                'name' => 'Administrador'
             ])->syncRoles([$role1]);

             Permission::create([

                'name' => 'Doctor'
             ])->syncRoles($role2);

             Permission::create([

                'name' => 'Paciente'
             ])->syncRoles($role3);




        //PERMISOS DE USUARIOS
        // Permission::create([

        //     'name' => 'Ver listado de usuarios'
        // ])->syncRoles([$role1]);


        // Permission::create([

        //     'name' => 'Asignar Roles a los usuario'
        // ])->syncRoles([$role1]);

        // Permission::create([

        //     'name' => 'Eliminar usuarios'
        // ])->syncRoles([$role1]);

        // //PERMISOS DE ENTIDADES MEDICAS
        // Permission::create([

        //     'name' => 'Ver listado de entidades médicas'
        // ])->syncRoles([$role1]);

        // Permission::create([

        //     'name' => 'Crear entidades médicas'
        // ])->syncRoles([$role1]);

        // Permission::create([

        //     'name' => 'Editar entidades médicas'
        // ])->syncRoles([$role1]);

        // Permission::create([

        //     'name' => 'Eliminar entidades médicas'
        // ])->syncRoles([$role1]);


        // //PERMISO DE ESPECIALIDADES
        // Permission::create([

        //     'name' => 'Ver listado de especialidades'
        // ])->syncRoles([$role1]);

        // Permission::create([

        //     'name' => 'Crear especialidades'
        // ])->syncRoles([$role1]);

        // Permission::create([

        //     'name' => 'Editar especialidades'
        // ])->syncRoles([$role1]);

        // Permission::create([

        //     'name' => 'Eliminar especialidades'
        // ])->syncRoles([$role1]);

        // //PERMISOS DE MEDICOS
        // Permission::create([

        //     'name' => 'Ver listado de médicos'
        // ])->syncRoles([$role1]);

        // Permission::create([

        //     'name' => 'Crear médicos'
        // ])->syncRoles([$role1]);

        // Permission::create([

        //     'name' => 'Editar médicos'
        // ])->syncRoles([$role1]);

        // Permission::create([

        //     'name' => 'Eliminar médicos'
        // ])->syncRoles([$role1]);

        // //PERMISO DE PACIENTES
        // Permission::create([

        //     'name' => 'Ver listado de pacientes'
        // ])->syncRoles([$role1]);

        // Permission::create([

        //     'name' => 'Crear pacientes'
        // ])->syncRoles([$role1]);

        // Permission::create([

        //     'name' => 'Editar pacientes'
        // ])->syncRoles([$role1]);

        // Permission::create([

        //     'name' => 'Eliminar pacientes'
        // ])->syncRoles([$role1]);


        // //PERMISO DE CITAS
        // Permission::create([

        //     'name' => 'Ver listado de citas'
        // ])->syncRoles([$role1, $role2 , $role3]);

        // Permission::create([

        //     'name' => 'Crear  citas'
        // ])->syncRoles([$role1, $role2, $role3]);

        // Permission::create([

        //     'name' => 'Editar citas'
        // ])->syncRoles([$role1, $role2, $role3]);

        // Permission::create([

        //     'name' => 'Eliminar citas citas'
        // ])->syncRoles([$role1, $role2, $role3]);



        // //PERMISO DE ROLES
        // Permission::create([

        //     'name' => 'Ver listado de roles'
        // ])->syncRoles([$role1]);

        // Permission::create([

        //     'name' => 'Crear roles'
        // ])->syncRoles([$role1]);

        // Permission::create([

        //     'name' => 'Editar roles'
        // ])->syncRoles([$role1]);

        // Permission::create([

        //     'name' => 'Eliminar roles'
        // ])->syncRoles([$role1]);

        // //PERMISOS
        // Permission::create([

        //     'name' => 'Ver listado de permisos'
        // ])->syncRoles([$role1]);

        // Permission::create([

        //     'name' => 'Crear permisos'
        // ])->syncRoles([$role1]);

        // Permission::create([

        //     'name' => 'Editar permisos'
        // ])->syncRoles([$role1]);

        // Permission::create([

        //     'name' => 'Eliminar permisos'
        // ])->syncRoles([$role1]);
    }
}
