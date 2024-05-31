<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = Auth::user(); // Suponiendo que el usuario está autenticado
        $nombres = $user->roles->first();
        return view('home', compact('nombres'));
    }
}
