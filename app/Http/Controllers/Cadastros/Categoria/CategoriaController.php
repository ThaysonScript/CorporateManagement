<?php

namespace App\Http\Controllers\Cadastros\Categoria;

use App\Http\Controllers\Controller;
use App\Models\Cadastros\Categoria;
use App\Models\Cadastros\Estoque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoriaController extends Controller
{
    public function CategoriaIndex($idEstoque)
    {
        $categorias = Categoria::all()->where('estoques_id', $idEstoque)->where('user_id', $user_id = Auth::id());

        $estoques = Estoque::findOrFail($idEstoque);

        return view('site.mostrar.categorias', compact('categorias', 'estoques'));
    }


    public function CategoriaCreate()
    {
        $estoques = Estoque::all()->where('user_id', $user_id = Auth::id());
        
        return view('cadastros.categorias', compact('estoques'));
    }
    

    public function CategoriaStore(Request $request)
    {
        Categoria::CriarCategoria($request);

        return redirect()->route('site.home');
    }



    public function CategoriaUpdate(Request $request, $idCategoria)
    {
        $atualizarCategoria = Categoria::findOrFail($idCategoria);

        $novoTituloCategoria = $request->input('tituloCategoria');
        $novaDescricaoCategoria = $request->input('descricaoCategoria');

        if($atualizarCategoria->tituloCategoria != $novoTituloCategoria && $atualizarCategoria->descricaoCategoria != $novaDescricaoCategoria) {
            $atualizarCategoria->tituloCategoria = $novoTituloCategoria;
            $atualizarCategoria->descricaoCategoria = $novaDescricaoCategoria;

            $atualizarCategoria->save();

            return redirect()->back();
        }
        else if($atualizarCategoria->tituloCategoria != $novoTituloCategoria) {
            $atualizarCategoria->tituloCategoria = $novoTituloCategoria;

            $atualizarCategoria->save();

            return redirect()->back();
        }
        else {
            $atualizarCategoria->descricaoCategoria = $novaDescricaoCategoria;

            $atualizarCategoria->save();

            return redirect()->back();
        }
    }


    public function CategoriasDeletar($categoriaId)
    {
        $deletarCategoria = Categoria::findOrFail($categoriaId);

        $findId = $deletarCategoria->id;

        if($findId !== null) {
            $deletarCategoria->delete();

            return redirect()->back()->with('sucesso', 'categoria deletada com sucesso');
        }
        else {
            return redirect()->back()->with('erro', 'categoria nao encontrada');
        }
    }
}
