@extends('layouts.geral.layoutGeral')

@section('titulo-pagina')
    Home
@endsection

@section('conteudo-pagina')

    <!-- Conteúdo principal -->
    <div class="container mt-5">
        <div class="jumbotron text-center p-5">
            <h1 class="display-4">Bem-vindo ao Gerenciador de Estoques!</h1>
            <p class="lead">Gerencie seus estoques de forma eficiente e organize seus produtos.</p>
            <hr class="my-4">
            <p>Explore as funcionalidades do sistema e mantenha seus estoques sempre atualizados.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Saiba Mais</a>
        </div>
    </div>

    <!-- Seção de estoques do usuário -->
    <div class="row mt-5 pb-5">
        <div class="col-md-12">
            <h2 class="text-center">Meus Estoques</h2>

            <div class="form-group mb-4">

                <label for="PesquisarEstoque" class="mb-2">Pesquisar estoque:</label>
                <input type="text" class="form-control" id="PesquisarEstoque" placeholder="Digite o nome do seu estoque">

            </div>

            <div class="row" id="stockList">

                @foreach ($estoques as $estoque)
                    
                    <div class="card text-center mb-3" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $estoque->tituloCategoriaEstoque }}</h5>
                            <p class="card-text">{{ $estoque->descricaoCategoriaEstoque }}</p>
                            <a href="#" class="btn btn-primary">Mais Sobre?</a>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>

@endsection