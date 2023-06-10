<?php

namespace App\Http\Controllers\CadastroEstoques;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CadastroEstoques\CategoriaEstoque;
use Illuminate\Support\Facades\Auth;

class CategoriaEstoqueController extends Controller
{
    public function Index()
    {
        return view('cadastroEstoques.categoriaEstoque');
    }

    public function CadastrandoCategoriaEstoque(Request $request)
    {
        $encontrarEstoqueExistente = CategoriaEstoque::where('tituloCategoriaEstoque', $request->tituloCategoriaEstoque)->first();

        if (!$encontrarEstoqueExistente) {
            $cadastrandoEstoque = new CategoriaEstoque;

            $cadastrandoEstoque->tituloCategoriaEstoque = $request->tituloCategoriaEstoque;
            $cadastrandoEstoque->descricaoCategoriaEstoque = $request->descricaoCategoriaEstoque;
            $cadastrandoEstoque->user_id = Auth::user()->id;

            $cadastrandoEstoque->save();

            return redirect()->route('site.home');
        }
    }
}
