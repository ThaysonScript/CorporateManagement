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
        
    }

    public function CategoriaProdutoCreate(Request $request)
    {
        
    }

    public function ProdutoCreate(Request $request)
    {
        
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
