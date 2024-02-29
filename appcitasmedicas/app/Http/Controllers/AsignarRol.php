<?php

namespace App\Http\Controllers;

use App\Models\Third_Data;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AsignarRol extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {

    }

    public function __invoke()
    {
        $terceros = Third_Data::all();
        return view('acceso.listUser' , compact('terceros'));
    }
    public function index()
    {
        $terceros = Third_Data::all();
        return view('acceso.listUser' , compact('terceros'));
    }
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        $roles = Role::all();

        return view('acceso.UserRole' ,compact('user' , 'roles'));
    }

    public function update(Request $request, string $id)
    {
       $user = User::find($id);
       $user->roles()->sync($request->roles);
        return redirect()->route('asignar.edit',$user);
    }

}
