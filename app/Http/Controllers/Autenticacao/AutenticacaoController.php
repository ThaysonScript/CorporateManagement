<?php

namespace App\Http\Controllers\Autenticacao;

use App\Http\Controllers\Controller;
use App\Models\Autenticacao\Registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AutenticacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Registro()
    {
        return view('autenticacao.registro');
    }


    public function Login()
    {
        return view('autenticacao.login');
    }


    public function Logando(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('home');
        }

        return back()->withErrors([
            'email' => 'Email Inválido',
            'password' => 'Senha Inválida',
        ])->onlyInput('email', 'password');
    }


    public function RegistrandoUsuario(Request $request)
    {
        $validarCampos = $request->validate([
            'name' => 'required|string|min:1|max:200',
            'email' => 'required|email|unique:users|min:1|max:200',
            'password' => 'required|string|min:6|max:20',
        ]);

        $EncontrarContaExistente = Registro::where('email', $request->email)->first();

        if ($EncontrarContaExistente) {
            return redirect('autenticacao.registro');
        } else {
            $criptografarSenha = Hash::make($request->password);

            if (Hash::check($request->passwordConfirm, $criptografarSenha)) {
                $registrarUsuario = new Registro();

                $registrarUsuario->name = $request->name;
                $registrarUsuario->email = $request->email;
                $registrarUsuario->password = $criptografarSenha;

                $registrarUsuario->save();

                return redirect()->route('site.home');
            }
            return back()->route('autenticacao.registro')->withErrors($validarCampos);
        }
    }


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
