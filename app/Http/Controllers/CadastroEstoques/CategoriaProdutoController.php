<?php

namespace App\Http\Controllers\CadastroEstoques;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CadastroEstoques\CategoriaEstoque;
use App\Models\CadastroEstoques\CategoriaProduto;
use Illuminate\Support\Facades\Auth;

class CategoriaProdutoController extends Controller
{
    public function Index()
    {
        $estoques = CategoriaEstoque::all()->where('user_id', $user_id = Auth::user()->id);

        return view('cadastroEstoques.categoriaProduto', compact('estoques'));
    }

    public function CadastrandoCategoriaProduto(Request $request)
    {
        $encontrarCategoriaProdutoExistente = CategoriaProduto::where('tituloCategoriaProduto', $request->tituloCategoriaProduto)->first();

        if(!$encontrarCategoriaProdutoExistente) {
            $cadastrandoCategoriaProduto = new CategoriaProduto();

            $cadastrandoCategoriaProduto->tituloCategoriaProduto = $request->tituloCategoriaProduto;
            $cadastrandoCategoriaProduto->descricaoCategoriaProduto = $request->descricaoCategoriaProduto;
            $cadastrandoCategoriaProduto->fornecedorCategoriaProduto = $request->fornecedorCategoriaProduto;

            $cadastrandoCategoriaProduto->user_id = Auth::user()->id;
            $cadastrandoCategoriaProduto->categoria_estoque_id = $request->categoria_estoque_id;    // categoria_estoque_id recebido do select

            // $categoriaEstoque = $cadastrandoCategoriaProduto::with('categoriaEstoque')->first();
            // $categoriaEstoqueID = $categoriaEstoque->id;

            // $cadastrandoCategoriaProduto->categoria_estoque_id = $categoriaEstoqueID;
            
            $cadastrandoCategoriaProduto->save();

            return redirect()->route('site.home');
        }
    }
}
