<?php

namespace App\Http\Controllers\Autenticacao;

use App\Http\Controllers\Controller;
use App\Models\Autenticacao\Registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    public function Index()
    {
        return view('autenticacao.registro');
    }

    public function RegistrarUsuario(Request $request)
    {
        $validarCampos = $request->validate([
            'name' => 'required|string|min:1|max:200',
            'email' => 'required|email|unique:users|min:1|max:200',
            'password' => 'required|string|min:6|max:20',
        ]);

        $EncontrarContaExistente = Registro::where('email', $request->email)->first();

        if($EncontrarContaExistente) {
            return redirect('autenticacao.registro');
        }
        else {
            $criptografarSenha = Hash::make($request->password);

            if(Hash::check($request->passwordConfirm, $criptografarSenha)) {
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
}
