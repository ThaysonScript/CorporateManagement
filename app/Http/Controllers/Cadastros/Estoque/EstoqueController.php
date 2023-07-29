<?php

namespace App\Http\Controllers\Cadastros\Estoque;

use App\Http\Controllers\Controller;
use App\Models\Cadastros\Estoque;
use Illuminate\Http\Request;

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


    public function EstoquesAtualizar(Request $request, $estoqueId)
    {
        $atualizarEstoque = Estoque::findOrFail($estoqueId);

        $novoTitulo = $request->tituloEstoque;
        $novaDescricao = $request->descricaoEstoque;

        $atualizarEstoque->titulo = $novoTitulo;
        $atualizarEstoque->descricao = $novaDescricao;

        $atualizarEstoque->save();

        return redirect()->back();
    }
    

    public function EstoquesDeletar($estoqueId)
    {
        $deletarEstoque = Estoque::findOrFail($estoqueId);
        $findId = $deletarEstoque->id;

        if($findId !== null) {
            $deletarEstoque->delete();
            return redirect()->back()->with('sucesso', 'estoque deletado com sucesso');
        }
        else {
            return redirect()->back()->with('erro', 'estoque nao encontrado');
        }
    }
}
