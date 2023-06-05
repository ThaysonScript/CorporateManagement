@extends('layouts.geral.layoutGeral')

@section('titulo-pagina')
    Categoria de Produtos
@endsection

@section('conteudo-pagina')

<h1 class="text-center">Categoria de Produtos</h1>
<div class="container d-flex justify-content-center text-center column">
    
    @foreach ($categoriaProdutoTotais as $CategoriaProduto)
    <div class="d-flex justify-content-center text-center">
        <div class="card text-center mb-3">
            <div class="card-body">
                <h5>{{ $CategoriaProduto->tituloCategoriaProduto }}</h5>
                <p>{{ $CategoriaProduto->descricaoCategoriaProduto }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection