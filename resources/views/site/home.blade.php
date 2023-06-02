@extends('layouts.home.homeLayout')

@section('titulo-pagina')
    Home
@endsection

@section('conteudo-pagina')

    <!-- Barra de navegação -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Gerenciador de Estoques</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    
                    <a class="btn btn-primary me-md-2" href="#">Home</a>

                    <a class="btn btn-primary" href="#">Estoques</a>

                    <a class="btn btn-primary" href="#">Produtos</a>

                    <a class="btn btn-primary" href="#">Categorias</a>

                    <a class="btn btn-primary" href="#">Fornecedores</a>

                    <a class="btn btn-primary" href="{{ route('autenticacao.logout') }}">Sair</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Conteúdo principal -->
    <div class="container mt-5">
        <div class="jumbotron text-center p-5">
            <h1 class="display-4">Bem-vindo ao Gerenciador de Estoques!</h1>
            <p class="lead">Gerencie seus estoques de forma eficiente e organize seus produtos.</p>
            <hr class="my-4">
            <p>Explore as funcionalidades do sistema e mantenha seus estoques sempre atualizados.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Saiba Mais</a>
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

                <div class="card text-center mb-3" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Estoque 1</h5>
                      <p class="card-text">Descrição do Estoque 1.</p>
                      <a href="#" class="btn btn-primary">Mais Sobre?</a>
                    </div>
                </div>

                <div class="card text-center mb-3" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Estoque 2</h5>
                      <p class="card-text">Descrição do Estoque 2.</p>
                      <a href="#" class="btn btn-primary">Mais Sobre?</a>
                    </div>
                </div>

                <div class="card text-center mb-3" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Estoque 3</h5>
                      <p class="card-text">Descrição do Estoque 3.</p>
                      <a href="#" class="btn btn-primary">Mais Sobre?</a>
                    </div>
                </div>

                <div class="card text-center mb-3" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Estoque 4</h5>
                      <p class="card-text">Descrição do Estoque 4.</p>
                      <a href="#" class="btn btn-primary">Mais Sobre?</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection