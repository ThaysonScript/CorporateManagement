@extends('layouts.home.homeLayout')

@section('titulo-pagina')
    Home
@endsection

@section('conteudo-pagina')

    <!-- Barra de navegação -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Gerenciador de Estoques</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Estoques</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Fornecedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('autenticacao.logout') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo principal -->
    <div class="container mt-5">
        <div class="jumbotron text-center">
            <h1 class="display-4">Bem-vindo ao Gerenciador de Estoques!</h1>
            <p class="lead">Gerencie seus estoques de forma eficiente e organize seus produtos.</p>
            <hr class="my-4">
            <p>Explore as funcionalidades do sistema e mantenha seus estoques sempre atualizados.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Saiba Mais</a>
        </div>

    <!-- Seção de estoques do usuário -->
    <div class="row">
        <div class="col-md-12">
            <h2>Meus Estoques</h2>

            <div class="form-group">
                <label for="searchStock">Pesquisar estoque:</label>
                <input type="text" class="form-control" id="searchStock" placeholder="Digite o nome do estoque">
            </div>

            <div class="row" id="stockList">
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Estoque 1</h5>
                            <p class="card-text">Descrição do Estoque 1.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Estoque 2</h5>
                            <p class="card-text">Descrição do Estoque 2.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Estoque 3</h5>
                            <p class="card-text">Descrição do Estoque 3.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection