<?php

namespace App\Http\Controllers\Site\PaginaGeral;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaginaGeralController extends Controller
{
    public function PaginaIndex()
    {
        return view('site.landing-page');
    }

    public function PaginaHomeIndex()
    {
        $user = User::find(Auth::id());
        
        $estoques = $user->Estoques;

        return view('site.home', compact('estoques'));
    }

    public function Aplicativo()
    {
        return view('site.aplicativo');
    }
}
