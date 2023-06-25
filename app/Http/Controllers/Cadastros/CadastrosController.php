<?php

namespace App\Http\Controllers\Cadastros;

use App\Http\Controllers\Controller;
use App\Models\Cadastros\Estoque;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CadastrosController extends Controller
{
    public function PaginaIndex()
    {
        return view('site.landing-page');
    }

    public function PaginaHomeIndex()
    {
        $user = User::find(Auth::id());

        $estoques = $user->Estoques;

        // dd($estoques);

        // $estoques::all()->where($user);

        return view('site.home', compact('estoques'));
    }

    public function EstoquesCreate()
    {
        return view('cadastros.estoques');
    }

    public function CategoriaCreate()
    {
        $estoques = Estoque::all()->where('user_id', $user_id = Auth::user()->id);
        
        return view('cadastros.produtos', compact('estoques'));
    }

    public function ProdutoCreate()
    {
        $produtos = Estoque::all()->where('user_id', $user_id = Auth::user()->id);
        return view('cadastroEstoques.produto', compact('produtos'));
    }


    public function EstoquesStore(Request $request)
    {
        Estoque::CadastrarEstoque($request);

        return redirect()->route('site.home');
    }

    public function CategoriaStore(Request $request)
    {
        
    }

    public function ProdutoStore(Request $request)
    {
        
    }




    public function EstoquesShow()
    {
        $estoquesTotais = Estoque::all()->where('user_id', $user_id = Auth::user()->id);
        
        return view('site.visualizar.estoques', compact('estoquesTotais'));
    }

    public function CategoriaShow()
    {
        $categoriaProdutoTotais = Estoque::all()->where('user_id', $user_id = Auth::user()->id);

        return view('site.visualizar.categoriaProduto', compact('categoriaProdutoTotais'));
    }

    public function ProdutosShow()
    {
        $ProdutoTotais = Estoque::all()->where('user_id', $user_id = Auth::user()->id);

        return view('site.visualizar.produtos', compact('ProdutoTotais'));
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
