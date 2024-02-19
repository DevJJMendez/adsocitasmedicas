<?php

namespace App\Http\Controllers;

use App\Models\Objeto;
use App\Models\Personal;
use App\Models\User;
use App\Models\Vehiculo;
use Illuminate\Support\Facades\Http;

class adminController extends Controller
{

    public function index()
{
    $response = Http::get('https://frasedeldia.azurewebsites.net/api/phrase');
    $data = $response->json();
    $personalR = Personal::where('estado', 1)->count();
    $users = User::where('estado', 1)->count();
    $vehiculo = Vehiculo::where('estado', 1)->count();
    $objeto = Objeto::where('estado', 1)->count();


    return view('admin.dashboard', compact('personalR', 'users','vehiculo','objeto','data'));
}

}
