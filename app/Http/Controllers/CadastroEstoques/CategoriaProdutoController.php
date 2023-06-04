<?php

namespace App\Http\Controllers\CadastroEstoques;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriaProdutoController extends Controller
{
    public function Index()
    {
        return view('cadastroEstoques.categoriaProduto');
    }
}
