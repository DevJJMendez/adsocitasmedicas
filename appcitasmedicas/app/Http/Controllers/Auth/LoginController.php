<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected function authenticated(Request $request, $user)
    {
        if ($user->thirdData && $user->thirdData->id_status != 1) {
            Auth::logout();
            return redirect()->route('login')->with('error', 'No tienes permiso para acceder.');
        }

        return redirect()->intended($this->redirectPath());
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
