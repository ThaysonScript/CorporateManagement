<?php

namespace App\Http\Controllers\Site\Visualizar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VerProdutoController extends Controller
{
    public function VerProdutos()
    {
        return view('site.visualizar.produtos');
    }
}
