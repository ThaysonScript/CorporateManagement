<?php

namespace App\Http\Controllers\Site\Visualizar;

use App\Http\Controllers\Controller;
use App\Models\CadastroEstoques\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerProdutoController extends Controller
{
    public function VerProdutos()
    {
        $ProdutoTotais = Produto::all()->where('user_id', $user_id = Auth::user()->id);

        return view('site.visualizar.produtos', compact('ProdutoTotais'));
    }
}
