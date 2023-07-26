<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Controllers\Controller;
use App\Models\User;
use Hamcrest\Core\HasToString;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\isEmpty;

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

        $verificarEmail = User::where('email', $request->email)->first();
        $senha = $request->password;

        if($verificarEmail === null) {
            return back()->withErrors([
                'erroGeral' => 'Email não cadastrado/incorreto e/ou senha incorreta.'
            ]);
        }
        else if(!($verificarEmail && Hash::check($senha, $verificarEmail->password))) {
            return back()->withErrors(['password' => 'Senha incorreta.']);
        }
    }
}
