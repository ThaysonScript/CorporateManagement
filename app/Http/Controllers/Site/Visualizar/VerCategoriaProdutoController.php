<?php

namespace App\Http\Controllers\Site\Visualizar;

use App\Http\Controllers\Controller;
use App\Models\CadastroEstoques\CategoriaProduto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerCategoriaProdutoController extends Controller
{
    public function VerCategoriaProduto()
    {
        $categoriaProdutoTotais = CategoriaProduto::all()->where('user_id', $user_id = Auth::user()->id);

        return view('site.visualizar.categoriaProduto', compact('categoriaProdutoTotais'));
    }
}
