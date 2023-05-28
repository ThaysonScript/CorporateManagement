<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;

class AutenticacaoController extends Controller
{
    public function Index()
    {
        return view('autenticacao.registro');
    }

    public function RegistrarUsuario(Request $request)
    {
        $registrarUsuario = new Registro();

        $registrarUsuario->Email = $request->Email;
        $registrarUsuario->Senha = $request->Senha;

        $registrarUsuario->save();

        return redirect()->route('site.home');
    }
}
