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
        
    }


    public function RegistrandoUsuario(Request $request)
    {
        
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
