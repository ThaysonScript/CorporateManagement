<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\CadastroEstoques\CategoriaEstoque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function PaginaInicial()
    {
        return view('site.inicialPage');
    }

    public function PaginaHome()
    {
        $estoques = CategoriaEstoque::all()->where('user_id', $user_id = Auth::user()->id);

        // $estoques = $estoques->all()->where('user_id', $user_id = Auth::user()->id);

        return view('site.home', compact('estoques'));
    }
}
