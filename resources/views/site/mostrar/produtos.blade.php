@extends('layouts.geral.layoutGeral')

@section('titulo-pagina')
    Produtos
@endsection

@section('conteudo-pagina')

<h1 class="text-center">Produtos</h1>
<div class="container d-flex justify-content-center text-center column">
    
    @foreach ($ProdutoTotais as $Produto)
    <div class="d-flex justify-content-center text-center">
        <div class="card text-center mb-3">
            <div class="card-body">
                <h5>{{ $Produto->tituloProduto }}</h5>
                <p>{{ $Produto->descricaoProduto }}</p>
                <p>{{ $Produto->quantidadeProdutoEstoque }}</p>
                <p>{{ $Produto->fornecedorProduto }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection