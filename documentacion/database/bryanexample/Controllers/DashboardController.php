<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->hasPermissionTo('Porteria')) {
            return redirect()->route('porteria.dashboard');
        } else {
            return redirect()->route('admin.dashboard');
        }
    }
}
