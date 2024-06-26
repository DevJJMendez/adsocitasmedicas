<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:Administrador');
    }
    public function index()
    {
        $roles = Role::all();
        return view('acceso.roles.index', compact('roles'));

    }
    public function create()
    {
        $permissions = Permission::all();
        return view('acceso.roles.create', compact('permissions'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $role = Role::create($request->all());
        $role->permissions()->sync($request->permissions);
        return redirect()->route('admin.roles.edit', $role)->with('info', 'El rol se creo con exito');
    }
    public function show(Role $role)
    {
        return view('acceso.roles.show', compact('role'));
    }
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('acceso.roles.edit', compact('role', 'permissions'));
    }
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $role->update($request->all());
        $role->permissions()->sync($request->permissions);
        return redirect()->route('admin.roles.edit', $role)->with('info', 'El rol se actualizo con exito');
    }
    public function destroy(Role $role)
    {
        $role->delete();
        notify()->error("El rol ha sido eliminado satisfactoriamente", "Eliminar rol");
        return back();
    }
}
