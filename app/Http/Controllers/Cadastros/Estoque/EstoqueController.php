<?php

namespace App\Http\Controllers\Cadastros\Estoque;

use App\Http\Controllers\Controller;
use App\Models\Cadastros\Categoria;
use App\Models\Cadastros\Estoque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EstoqueController extends Controller
{
    public function EstoquesCreate()
    {
        return view('cadastros.estoques');
    }


    public function EstoquesStore(Request $request)
    {
        Estoque::CadastrarEstoque($request);

        return redirect()->route('site.home');
    }
}
