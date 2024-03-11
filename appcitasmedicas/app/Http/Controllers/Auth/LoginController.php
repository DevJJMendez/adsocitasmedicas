<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function authenticated(Request $request, $user)
    {
        // Verifica si el usuario tiene estado 1 en third_data
        if ($user->thirdDataUser && $user->thirdDataUser->statu_type_id != 1) {
            Auth::logout(); // Cierra la sesión

            return redirect()->route('login')->with('error', 'No tienes permiso para acceder.');
        }

        return redirect()->intended($this->redirectPath());
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


}
