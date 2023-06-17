<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CadastroEstoques\CategoriaEstoque;
use App\Models\CadastroEstoques\CategoriaProduto;
use App\Models\CadastroEstoques\Produto;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function PaginaIndex()
    {
        return view('site.landing-page');
    }

    public function PaginaHomeIndex()
    {
        $todosEstoques = CategoriaEstoque::all()->where('user_id', $user_id = Auth::user()->id);

        return view('site.home', compact('todosEstoques'));
    }



    public function VerEstoques()
    {
        $estoquesTotais = CategoriaEstoque::all()->where('user_id', $user_id = Auth::user()->id);
        
        return view('site.visualizar.estoques', compact('estoquesTotais'));
    }

    public function VerCategoriaProduto()
    {
        $categoriaProdutoTotais = CategoriaProduto::all()->where('user_id', $user_id = Auth::user()->id);

        return view('site.visualizar.categoriaProduto', compact('categoriaProdutoTotais'));
    }

    public function VerProdutos()
    {
        $ProdutoTotais = Produto::all()->where('user_id', $user_id = Auth::user()->id);

        return view('site.visualizar.produtos', compact('ProdutoTotais'));
    }













    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
