<?php

namespace App\Http\Controllers\Cadastros\Estoque;

use App\Http\Controllers\Controller;
use App\Models\Cadastros\Estoque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EstoqueController extends Controller
{
    public function EstoquesCreate()
    {
        return view('cadastros.estoques');
    }



    public function EstoquesStore(Request $request)
    {
        Estoque::CadastrarEstoque($request);

        return redirect()->route('site.home');
    }


    
    public function EstoquesShow()
    {
        $estoquesTotais = Estoque::all()->where('user_id', $user_id = Auth::user()->id);
        
        return view('site.visualizar.estoques', compact('estoquesTotais'));
    }
}
