<?php

namespace App\Http\Controllers\Cadastros\Categoria;

use App\Http\Controllers\Controller;
use App\Models\Cadastros\Categoria;
use App\Models\Cadastros\Estoque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isEmpty;

class CategoriaController extends Controller
{
    public function CategoriaIndex($idEstoque)
    {
        $categorias = Categoria::all()->where('estoques_id', $idEstoque)->where('user_id', $user_id = Auth::id());

        // echo $categorias->count();
        
        // if ($categorias->count() == 0) {
        //     dd($categorias);
        // }

        return view('site.mostrar.categorias', compact('categorias'));
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

        // dd($novoTituloCategoria, $novoDescricaoCategoria);
        // dd($atualizarCategoria);

        if($atualizarCategoria->tituloCategoria != $novoTituloCategoria && $atualizarCategoria->descricaoCategoria != $novaDescricaoCategoria) {
            $atualizarCategoria->tituloCategoria = $novoTituloCategoria;
            $atualizarCategoria->descricaoCategoria = $novaDescricaoCategoria;

            // dd($novoTituloCategoria, $novaDescricaoCategoria);
            $atualizarCategoria->save();
            return redirect()->back();
        }
        else if($atualizarCategoria->tituloCategoria != $novoTituloCategoria) {
            $atualizarCategoria->tituloCategoria = $novoTituloCategoria;

            // dd($novoTituloCategoria);
            $atualizarCategoria->save();
            return redirect()->back();
        }
        else {
            $atualizarCategoria->descricaoCategoria = $novaDescricaoCategoria;

            // dd($novaDescricaoCategoria);
            $atualizarCategoria->save();
            return redirect()->back();
        }
    }
}
