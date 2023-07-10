<?php

namespace App\Http\Controllers\Cadastros\Produto;

use App\Http\Controllers\Controller;
use App\Models\Cadastros\Estoque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdutoController extends Controller
{
    public function ProdutoCreate()
    {
        $produtos = Estoque::all()->where('user_id', $user_id = Auth::user()->id);
        return view('cadastroEstoques.produto', compact('produtos'));
    }


    public function ProdutoStore(Request $request)
    {
        //
    }



    public function ProdutosShow()
    {
        $ProdutoTotais = Estoque::all()->where('user_id', $user_id = Auth::user()->id);

        return view('site.visualizar.produtos', compact('ProdutoTotais'));
    }
}
