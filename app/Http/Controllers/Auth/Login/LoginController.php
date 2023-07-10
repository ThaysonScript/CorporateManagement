<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Mostrar formulario de login
     * 
     * @param void
     * @return View form-login
     */
    public function LoginCreate()
    {
        return view('auth.login');
    }


    /**
     * Entrar na Aplicacao
     * 
     * @param Request $request
     * @return View home.blade.php
     */
    public function LoginEntrar(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('home');
        }
        return back()->withErrors([
            'email' => 'Email não cadastrado.',
            'password' => 'Senha incorreta',
        ])->onlyInput('email', 'password');
    }
}
