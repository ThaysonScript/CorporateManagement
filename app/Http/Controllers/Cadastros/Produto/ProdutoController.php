<?php

namespace App\Http\Controllers\Cadastros\Produto;

use App\Http\Controllers\Controller;
use App\Models\Cadastros\Categoria;
use App\Models\Cadastros\Produto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdutoController extends Controller
{
    public function ProdutoCreate()
    {
        $categorias = Categoria::all()->where('user_id', $user_id = Auth::id());

        return view('cadastros.produtos', compact('categorias'));

    }


    public function ProdutoStore(Request $request)
    {
        Produto::CriarProduto($request);

        return redirect()->route('site.home');
    }



    public function ProdutosShow($id)
    {
        $produtos = Produto::find($id);

        return view('site.mostrar.produtos', compact('produtos'));
    }
}
