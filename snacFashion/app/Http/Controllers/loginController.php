<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('dashboard.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Tentar autenticar o usuário com as credenciais fornecidas
        if (Auth::attempt($credentials)) {
            // Autenticação bem-sucedida
            return redirect()->intended('dashboard');
        }

        // Autenticação falhou
        return back()->withErrors([
            'email' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ])->withInput($request->only('email'));
    }
}
