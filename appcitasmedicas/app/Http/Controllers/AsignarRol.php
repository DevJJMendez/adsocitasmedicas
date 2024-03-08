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

        // $roles = Role::all();
        // $users = $roles->users()->with('thirdDataUser')->get();
        $usersWithRoles = User::with('roles')->get();
        // Dd($usersWithRoles);
        return view('acceso.listUser' , compact('usersWithRoles'));
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
        
        notify()->error("El rol ha sido eliminado satisfactoriamente" , "Eliminar rol");
        return back();

    }

}
