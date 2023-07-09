<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Gerencie suas Categorias</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="bg-dark text-white text-center">
    <x-layouts.menus.menu></x-layouts.menus.menu>
    <div class="container py-2">
        <h1 class="display-4">Controle sua Regra de Negócio</h1>
        <p class="lead">Adicione um Novo Estoque</p>
    </div>
</header>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="bg-light p-4 rounded shadow text-center">
                    <h2 class="mb-4">Cadastre uma Categoria</h2>
                    <form action="{{ route('cadastros.categorias-store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="tituloCategoria" id="tituloCategoria" class="form-control"
                                placeholder="Nome da Categoria">
                        </div>

                        <div class="mb-3">
                            <textarea name="descricaoCategoria" id="descricaoCategoria" 
                            class="form-control" cols="30" rows="4" placeholder="Descrição da Categoria"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="estoques_id">Tipo de Estoque</label>
                            <select name="estoques_id" id="estoques_id" class="form-control">
                                @foreach ($estoques as $estoque)
                                <option value="{{ $estoque->id }}">{{ $estoque->titulo }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg">Salvar Categoria</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<footer class="bg-dark text-white py-2">
    <div class="container text-center">
        <p>© 2023 CorpManager. All rights reserved.</p>
    </div>
</footer>
