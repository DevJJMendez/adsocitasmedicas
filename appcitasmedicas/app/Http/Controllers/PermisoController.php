<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermisoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:Ver listado de permisos')->only('index');
        $this->middleware('can:Crear permisos')->only('create');
        $this->middleware('can:Editar permisos')->only('edit');
        $this->middleware('can:Eliminar permisos')->only('destroy');

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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
