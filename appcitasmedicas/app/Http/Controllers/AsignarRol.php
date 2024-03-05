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
         $this->middleware('can:Administrador');


     }
    public function index()
    {
        $users = User::all();
        return view('acceso.listUser' , compact('users'));
    }


    public function edit(User  $user)
    {

         $roles = Role::all();

         return view('acceso.UserRole' ,compact('user' , 'roles'));
    }

    public function update(Request $request, User $user)
    {

       $user->roles()->sync($request->roles);
        return redirect()->route('asignar.edit',$user);
    }

    public function destroy(Role $role)
    {


    }

}
