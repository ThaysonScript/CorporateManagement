<?php

namespace App\Http\Controllers\Cadastros\Categoria;

use App\Http\Controllers\Controller;
use App\Models\Cadastros\Categoria;
use App\Models\Cadastros\Estoque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoriaController extends Controller
{
    public function CategoriaCreate()
    {
        $estoques = Estoque::all()->where('user_id', $user_id = Auth::id());
        
        return view('cadastros.categorias', compact('estoques'));
    }


    public function CategoriaStore(Request $request)
    {
        Categoria::CriarCategoria($request);

        return redirect()->route('site.home');
    }



    public function CategoriaShow()
    {
        $categoriaProdutoTotais = Estoque::all()->where('user_id', $user_id = Auth::user()->id);

        return view('site.visualizar.categoriaProduto', compact('categoriaProdutoTotais'));
    }
}
