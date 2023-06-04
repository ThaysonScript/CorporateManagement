<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\CadastroEstoques\CategoriaEstoque;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function PaginaInicial()
    {
        return view('site.inicialPage');
    }

    public function PaginaHome()
    {
        $estoques = CategoriaEstoque::all();

        return view('site.home', compact('estoques'));
    }
}
