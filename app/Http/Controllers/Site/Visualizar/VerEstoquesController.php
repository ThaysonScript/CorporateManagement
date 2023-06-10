<?php

namespace App\Http\Controllers\Site\Visualizar;

use App\Http\Controllers\Controller;
use App\Models\CadastroEstoques\CategoriaEstoque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerEstoquesController extends Controller
{
    public function VerEstoques()
    {
        $estoquesTotais = CategoriaEstoque::all()->where('user_id', $user_id = Auth::user()->id);

        return view('site.visualizar.estoques', compact('estoquesTotais'));
    }
}
