<?php

namespace App\Http\Controllers\Cadastros\Fornecedores;

use App\Http\Controllers\Controller;
use App\Models\Cadastros\Categoria;
use App\Models\Cadastros\Fornecedor;
use App\Models\Cadastros\Produto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FornecedorController extends Controller
{
    public function FornecedorCreate()
    {
        $user = User::find(Auth::id());

        $estoques = $user->Estoques;

        $categorias = Categoria::all()->where('user_id', '=', $user->id);

        $produtos = $user->Produtos;

        return view('cadastros.fornecedores', compact(['estoques', 'categorias', 'produtos']));
    }


    public function FornecedorStore(Request $request)
    {
        $user = Auth::id();
        
        Fornecedor::create([
            'fornecedorNome' => $request->fornecedorNome,
            'email' => $request->email,
            'fornecedorEmpresa' => $request->fornecedorEmpres,
            'servicoPrestado' => $request->servicoPrestado,
            'telefone' => $request->telefone,
            'endereco' => $request->endereco,
            'tipo' => $request->tipo,
            'pais' => $request->pais,
            'estado' => $request->estado,
            'cidade' => $request->cidade,
            'user_id' => $user,
            'estoque_id' => $request->estoque_id,
            'categoria_id' => $request->categoria_id,
            'produto_id' => $request->produto_id
        ]);

        return redirect()->route('site.home')->with('message', 'fornecedor cadastrado');
    }
}
