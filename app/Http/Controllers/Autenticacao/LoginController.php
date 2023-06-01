<?php

namespace App\Http\Controllers\Autenticacao;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Index()
    {
        return view('autenticacao.login');
    }

    public function LoginEntrando(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials, $remember = false)) {
            $request->session()->regenerate();
 
            return redirect()->intended('home');
        }

        return back()->withErrors([
            'email' => 'Email Inválido',
            'password' => 'Senha Inválida',
        ])->onlyInput('email', 'password');
    }

    public function Logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}