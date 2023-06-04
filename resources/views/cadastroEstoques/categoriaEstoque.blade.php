@extends('layouts.cadastroEstoques.cadastroEstoqueLayout')

@section('titulo-pagina')
    Cadastrar um Estoque
@endsection

@section('conteudo-pagina')
    <h1>Cadastrar um Estoque</h1>

    <form action="{{ route('cadastroEstoques.cadastrandoEstoque') }}" method="POST">
        @csrf
        <label for="tituloCategoriaEstoque">Nome do Estoque:</label>
        <input type="text" name="tituloCategoriaEstoque" id="tituloCategoriaEstoque" placeholder="Nome do Estoque">
        <br>
        <label for="descricaoCategoriaEstoque">Descricao do Estoque:</label>
        <textarea name="descricaoCategoriaEstoque" id="descricaoCategoriaEstoque" cols="30" rows="10"></textarea>

        <button type="submit">Cadastrar Estoque</button>
    </form>
@endsection