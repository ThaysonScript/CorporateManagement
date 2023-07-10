<?php

namespace App\Http\Controllers\Auth\Registro;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Mostrar formulario de registro
     * 
     * @param void
     * @return View form-registro
     */
    public function RegistroCreate()
    {
        return view('auth.registro');
    }


    /**
     * Registrar novo usuario
     * 
     * @param Request $request
     * @return View home.blade.php  Usuario criado e logado
     */
    public function RegistroStore(Request $request)
    {
        if(!(User::VerificarUserCadastrado($request->email)) && $request->password == $request->passwordConfirm) {
            User::CriarUsuario($request);
            
            return redirect()->route('site.home');
        }
    }
}
