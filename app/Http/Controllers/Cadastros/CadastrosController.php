<?php

namespace App\Http\Controllers\Cadastros;

use App\Http\Controllers\Controller;
use App\Models\CadastroEstoques\CategoriaEstoque;
use App\Models\CadastroEstoques\CategoriaProduto;
use App\Models\CadastroEstoques\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CadastrosController extends Controller
{
    public function EstoquesIndex()
    {
        return view('cadastroEstoques.categoriaEstoque');
    }

    public function CategoriaProdutoIndex()
    {
        $estoques = CategoriaEstoque::all()->where('user_id', $user_id = Auth::user()->id);
        
        return view('cadastroEstoques.categoriaProduto', compact('estoques'));
    }

    public function ProdutoIndex()
    {
        $produtos = CategoriaProduto::all()->where('user_id', $user_id = Auth::user()->id);
        return view('cadastroEstoques.produto', compact('produtos'));
    }


    public function EstoquesCreate(Request $request)
    {
        $encontrarEstoqueExistente = CategoriaEstoque::where('tituloCategoriaEstoque', $request->tituloCategoriaEstoque)->first();

        if (!$encontrarEstoqueExistente) {
            $cadastrandoEstoque = new CategoriaEstoque;

            $cadastrandoEstoque->tituloCategoriaEstoque = $request->tituloCategoriaEstoque;
            $cadastrandoEstoque->descricaoCategoriaEstoque = $request->descricaoCategoriaEstoque;
            $cadastrandoEstoque->user_id = Auth::user()->id;

            $cadastrandoEstoque->save();

            return redirect()->route('site.home');
        }
    }

    public function CategoriaProdutoCreate(Request $request)
    {
        $encontrarCategoriaProdutoExistente = CategoriaProduto::where('tituloCategoriaProduto', $request->tituloCategoriaProduto)->first();

        if (!$encontrarCategoriaProdutoExistente) {
            $cadastrandoCategoriaProduto = new CategoriaProduto();

            $cadastrandoCategoriaProduto->tituloCategoriaProduto = $request->tituloCategoriaProduto;
            $cadastrandoCategoriaProduto->descricaoCategoriaProduto = $request->descricaoCategoriaProduto;
            $cadastrandoCategoriaProduto->fornecedorCategoriaProduto = $request->fornecedorCategoriaProduto;

            $cadastrandoCategoriaProduto->user_id = Auth::user()->id;
            $cadastrandoCategoriaProduto->categoria_estoque_id = $request->categoria_estoque_id;
            
            $cadastrandoCategoriaProduto->save();

            return redirect()->route('site.home');
        }
    }

    public function ProdutoCreate(Request $request)
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
