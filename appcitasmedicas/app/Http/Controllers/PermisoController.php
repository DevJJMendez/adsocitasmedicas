<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermisoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:Administrador');
    }
    public function index()
    {
        $permisos = Permission::all();
        return view('acceso.permisos.index', compact('permisos'));
    }
    public function createNewPermiso(Request $request)
    {
        $permission = Permission::create(['name' => $request->input('name_permiso')]);
        return back();
    }
    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        //
    }
    public function update(Request $request, string $id)
    {
        //
    }
    public function destroy(Permission $permiso)
    {
        $permiso->delete();
        notify()->error("El permiso ha sido eliminado satisfactoriamente", "Eliminar permiso");
        return back();
    }
}
