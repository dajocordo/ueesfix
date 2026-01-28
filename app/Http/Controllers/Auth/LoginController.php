<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Application\Usuario\UseCases\LoginUseCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct(
        private LoginUseCase $loginUseCase
    ) {
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        try {
            // Ejecutar el UseCase de login
            $usuarioData = $this->loginUseCase->ejecutar(
                $request->email,
                $request->password
            );

            // Hacer login en Laravel
            Auth::loginUsingId($usuarioData['id']);
            $request->session()->regenerate();

            return redirect()->intended('/home');
        } catch (\Exception $e) {
            return back()->withErrors([
                'email' => $e->getMessage(),
            ])->onlyInput('email');
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}