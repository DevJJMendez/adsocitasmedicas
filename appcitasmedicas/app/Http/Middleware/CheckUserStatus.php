<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserStatus
{
    public function handle(Request $request, Closure $next)
    {
        // Verifica si el usuario está autenticado
        if (Auth::check()) {
            $user = Auth::user();

            // Verifica si el usuario tiene registros en la tabla third_data
            if ($user->thirdData) {
                // Verifica el estado del usuario en la tabla third_data
                if ($user->thirdData->id_status = 1) {
                    // Si el estado es 1, permite el acceso
                    return $next($request);
                } else {
                    // Si el estado no es 1, redirecciona o retorna un mensaje de error
                    return redirect()->back()->with('error', 'No tienes permiso para acceder.');
                }
            } else {
                // Si el usuario no tiene registros en la tabla third_data, redirecciona o retorna un mensaje de error
                return redirect()->back()->with('error', 'No tienes permiso para acceder.');
            }
        }
        // Si el usuario no está autenticado, redirecciona a la página de inicio de sesión
        return redirect()->route('login');
    }
}
