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
                <form action="#" method="POST">
                    
                    @csrf
                    <label for="tituloCategoriaEstoque">Nome do Produto:</label>
                    <br>
                    <input type="text" name="tituloCategoriaEstoque" id="tituloCategoriaEstoque" placeholder="Nome do Estoque">
                    <br><br>

                    <label for="descricaoCategoriaEstoque">Descrição do Produto:</label>
                    <br>
                    <textarea name="descricaoCategoriaEstoque" id="descricaoCategoriaEstoque" cols="30" rows="10"></textarea>
                    <br><br>
                    <button type="submit">Cadastrar o Produto</button>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection