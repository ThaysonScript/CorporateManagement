@extends('layouts.geral.layoutGeral')

@section('titulo-pagina')
    Cadastrar Um Produto
@endsection

@section('conteudo-pagina')

<div class="d-flex justify-content-center text-center">
    <div class="row">
        <h1>Cadastrar Um Produto</h1>
    
        <div class="card text-center mb-3">
            <div class="card-body">
                <form action="{{ route('cadastroEstoques.cadastrandoProduto') }}" method="POST">
                    
                    @csrf
                    <label for="tituloProduto">Nome do Produto:</label>
                    <br>
                    <input type="text" name="tituloProduto" id="tituloProduto" placeholder="Nome do Produto">
                    <br><br>

                    <label for="descricaoProduto">Descrição do Produto:</label>
                    <br>
                    <textarea name="descricaoProduto" id="descricaoProduto" cols="30" rows="10"></textarea>
                    <br><br>

                    <input type="number" name="quantidadeProduto" id="quantidadeProduto" placeholder="quantidade de Produtos">
                    <br><br>

                    <input type="text" name="fornecedorProduto" id="fornecedorProduto" placeholder="fornecedor do Produto">
                    <br><br>

                    <button type="submit">Cadastrar o Produto</button>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection