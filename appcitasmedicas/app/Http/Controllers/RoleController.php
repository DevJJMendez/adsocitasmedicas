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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('acceso.roles.create' , compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required'
        ]);

        $role =Role::create($request->all());

        $role->permissions()->sync($request->permissions);

        return redirect()->route('admin.roles.edit' , $role)->with('info' , 'El rol se creo con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show( Role $role)
    {
        return view('acceso.roles.show' ,compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Role $role)
    {
        $permissions = Permission::all();
        return view('acceso.roles.edit', compact('role' , 'permissions'));
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

        return redirect()->route('admin.roles.edit' , $role)->with('info' , 'El rol se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        notify()->error("El rol ha sido eliminado satisfactoriamente" , "Eliminar rol");
        return back();


    }
}
