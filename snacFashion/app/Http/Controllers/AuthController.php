<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('dashboard.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        dd($credentials); // Verifique se as credenciais estão sendo recebidas corretamente

        if (Auth::attempt($credentials)) {
            Log::info('Login bem-sucedido para o usuário: ' . Auth::user()->email);
            return redirect()->intended('dashboard');
        } else {
            Log::warning('Falha no login para o email: ' . $request->input('email'));
        }

        return back()->withErrors([
            'email' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ])->withInput($request->only('email'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
