<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('acceso.roles.index', compact('roles'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function createNewRol(Request $request)
    {
        $role = Role::create(['name' => $request->input('name_role')]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $role = Role::find($id);
        $permisos = Permission::all();

        return view('acceso.rolePermiso', compact('role', 'permisos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' =>'required'
        ]);

        $role->update($request->all());

        $role->permissions()->sync($request->permissions);

        return redirect()->route('acceso.rolePermiso' , $role)->with('info' , 'El rol se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteRol( Role $role)
    {

        $role->delete();
        notify()->error('Médico eliminado correctamente', 'Eliminar Médico');
        return redirect()->route('roles.view');
    }
}
