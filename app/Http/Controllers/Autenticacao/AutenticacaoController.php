<?php

namespace App\Http\Controllers\Autenticacao;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutenticacaoController extends Controller
{
    /**
     * Mostrar formulario de login
     * 
     * @param void
     * @return View form-login
     */
    public function LoginCreate()
    {
        return view('autenticacao.login');
    }

    /**
     * Mostrar formulario de registro
     * 
     * @param void
     * @return View form-registro
     */
    public function RegistroCreate()
    {
        return view('autenticacao.registro');
    }

    /**
     * Registrar novo usuario
     * 
     * @param Request $request
     * @return View home.blade.php  Usuario criado e logado
     */
    public function RegistroStore(Request $request)
    {
        User::CriarUsuario($request);
 
        return redirect()->route('site.home');
        
    }

    /**
     * Entrar na Aplicacao
     * 
     * @param Request $request->email
     * @param Request $request->password
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


    /**
     * Sair da aplicacao
     * 
     * @param Request $request
     * @return Auth Auth::logout()
     * @return Session Invalidate
     * @return Session RegenerateToken
     */
    public function Logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }





















    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
