<?php

namespace App\Http\Controllers;

use App\Models\Third_Data;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class AsignarRol extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __invoke()
    {
        $users = Third_Data::query()
        ->with(['users' ])
        ->get();


        return view('acceso.listUser' , compact('users'));
    }


}
