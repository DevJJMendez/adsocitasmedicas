<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    /**
     * Reset the given user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function resetPassword(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            // El usuario no existe
            // Puedes mostrar un mensaje de error o redirigir al usuario a una página de error
            return back()->withErrors(['email' => 'El usuario no existe.']);
        }

        $request->validate($this->rules(), $this->validationErrorMessages());

        $response = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->password = bcrypt($password);
                $user->save();
            }
        );

        if ($response === Password::PASSWORD_RESET) {
            return redirect()->route('password.reset.success');
        }

        return back()->withErrors(['email' => __($response)]);
    }

    /**
     * Get the password reset validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ];
    }

    /**
     * Get the password reset validation error messages.
     *
     * @return array
     */
    protected function validationErrorMessages()
    {
        return [
            'token.required' => __('This password reset token is invalid.'),
            'email.required' => __('Please enter your email address.'),
            'email.email' => __('Please enter a valid email address.'),
            'password.required' => __('Please enter your password.'),
            'password.min' => __('Your password must be at least 8 characters.'),
            'password.confirmed' => __('Your password confirmation does not match.'),
        ];
    }
}
