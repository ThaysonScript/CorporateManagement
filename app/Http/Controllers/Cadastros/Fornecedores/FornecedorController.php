<?php

namespace App\Http\Controllers\Cadastros\Fornecedores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function FornecedorCreate()
    {
        return view('cadastros.fornecedores');
    }


    public function FornecedorStore()
    {
        return redirect()->route('site.home')->with('message', 'fornecedor cadastrado');
    }
}
