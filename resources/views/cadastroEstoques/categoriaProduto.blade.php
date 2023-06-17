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
                    <form action="{{ route('cadastroEstoques.cadastrandoCategoriaProduto') }}" method="POST">

                        @csrf
                        <label for="tituloCategoriaProduto">Nome da Categoria do Produto:</label>
                        <br>
                        <input type="text" name="tituloCategoriaProduto" id="tituloCategoriaProduto"
                            placeholder="Nome da Categoria do Produto">
                        <br><br>

                        <label for="descricaoCategoriaProduto">Descrição da Categoria do Produto:</label>
                        <br>
                        <textarea name="descricaoCategoriaProduto" id="descricaoCategoriaProduto" cols="30" rows="10"></textarea>
                        <br><br>

                        <div class="form-group">
                            <select name="categoria_estoque_id" id="categoria_estoque_id" class="form-control text-center">
                                <label for="categoria_estoque_id">Categoria do Estoque:</label>
                                @foreach ($estoques as $estoque)
                                    {{-- escolhe o id do estoque pelo nome do estoque e salva no categoria_estoque_id do select que é passado pro controller --}}
                                    <option value="{{ $estoque->id }}">{{ $estoque->tituloCategoriaEstoque }}</option>
                                @endforeach
                            </select>
                        </div>

                        <br><br>
                        <button type="submit">Cadastrar a Categoria do Produto</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
