<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Actions\Jetstream\DeleteUser;

class AsignarController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     protected $deleteUser;

    public function __construct(DeleteUser $deleteUser)
    {
        $this->deleteUser = $deleteUser;
    }
    
    public function index()
    {
       $users = User::all()->where('estado','1');

       return view('user.listauser',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $roles = Role::pluck('name','name')->all();
        return view('user.register',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => 'required|same:confirm-password',
            'roles' =>'required'
        ]);
        
        $input = $request->all();
        
        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
        $user->assignRole($request->input('roles'));
        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario Creado con Exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::find($id);
        $roles = Role::all();
        return view('user.userRol',compact('users','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users = User::find($id);

        $users->roles()->sync($request->roles);
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        if ($user) {
            // Llama a la acción DeleteUser para eliminar al usuario
            $this->deleteUser->delete($user);

            return redirect()->route('usuarios.index')
                ->with('success', 'Usuario eliminado con éxito')
                ->with('title', 'Eliminado');
        } else {
            return redirect()->route('usuarios.index')
                ->with('success', 'No se encontró el usuario');
        }
      
    }
}
