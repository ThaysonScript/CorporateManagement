<?php

namespace App\Http\Controllers\Auth\Registro;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{
    public function RegistroCreate()
    {
        return view('auth.registro');
    }


    public function RegistroStore(Request $request)
    {
        if(!(User::VerificarUserCadastrado($request->email)) && $request->password == $request->passwordConfirm) {
            User::CriarUsuario($request);

            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
     
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
     
                return redirect()->intended('/home');
            }
        }
        return back()->with([
            'message' => 'Por favor Cadastre um Usuário Válido',
            
        ]);
    }
}
