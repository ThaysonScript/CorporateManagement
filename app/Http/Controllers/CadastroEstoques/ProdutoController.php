<?php

namespace App\Http\Controllers\CadastroEstoques;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CadastroEstoques\CategoriaProduto;
use App\Models\CadastroEstoques\Produto;
use Illuminate\Support\Facades\Auth;

class ProdutoController extends Controller
{
    public function Index()
    {
        $produtos = CategoriaProduto::all()->where('user_id', $user_id = Auth::user()->id);
        return view('cadastroEstoques.produto', compact('produtos'));
    }

    public function CadastrandoProduto(Request $request)
    {
        $encontrarProdutoExistente = Produto::where('tituloProduto', $request->tituloProduto)->first();

        if (!$encontrarProdutoExistente) {
            $cadastrandoProduto = new Produto();

            $cadastrandoProduto->tituloProduto = $request->tituloProduto;
            $cadastrandoProduto->descricaoProduto = $request->descricaoProduto;
            $cadastrandoProduto->quantidadeProduto = $request->quantidadeProduto;
            $cadastrandoProduto->fornecedorProduto = $request->fornecedorProduto;

            $cadastrandoProduto->user_id = Auth::user()->id;
            $cadastrandoProduto->categoria_produto_id = $request->categoria_produto_id;

            $cadastrandoProduto->save();

            return redirect()->route('site.home');
        }
    }
}
