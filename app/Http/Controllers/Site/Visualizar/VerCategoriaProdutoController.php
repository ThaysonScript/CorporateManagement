<?php

namespace App\Http\Controllers\Site\Visualizar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VerCategoriaProdutoController extends Controller
{
    public function VerCategoriaProduto()
    {
        return view('site.visualizar.categoriaProduto');
    }
}
