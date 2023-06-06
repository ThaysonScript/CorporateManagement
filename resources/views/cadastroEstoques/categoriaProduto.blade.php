@extends('layouts.geral.layoutGeral')

@section('titulo-pagina')
    Cadastrar Uma Categoria para Produtos
@endsection

@section('conteudo-pagina')

<div class="d-flex justify-content-center text-center">
    <div class="row">
        <h1>Cadastrar Uma Categoria para Produtos</h1>
    
        <div class="card text-center mb-3">
            <div class="card-body">
                <form action="#" method="POST">
                    
                    @csrf
                    <label for="tituloCategoriaEstoque">Nome da Categoria do Produto:</label>
                    <br>
                    <input type="text" name="tituloCategoriaEstoque" id="tituloCategoriaEstoque" placeholder="Nome do Estoque">
                    <br><br>

                    <label for="descricaoCategoriaEstoque">Descrição da Categoria do Produto:</label>
                    <br>
                    <textarea name="descricaoCategoriaEstoque" id="descricaoCategoriaEstoque" cols="30" rows="10"></textarea>
                    <br><br>
                    <button type="submit">Cadastrar a Categoria do Produto</button>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection