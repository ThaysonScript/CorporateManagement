<?php

namespace App\Http\Controllers\CadastroEstoques;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CadastroEstoques\CategoriaProduto;
use Illuminate\Support\Facades\Auth;

class CategoriaProdutoController extends Controller
{
    public function Index()
    {
        return view('cadastroEstoques.categoriaProduto');
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
            $cadastrandoCategoriaProduto->categoria_estoque_id = Auth::user()->id;
            $cadastrandoCategoriaProduto->save();

            return redirect()->route('site.home');
        }
    }
}
