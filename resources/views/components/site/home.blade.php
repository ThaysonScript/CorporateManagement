<header>
    <div class="grid row bg-dark p-2">
        <div class="text-center ms-5 me-5 col-1">
            <x-layouts.menus.menu></x-layouts.menus.menu>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark col-10">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Seja bem vindo {{ $usuarioLogado }}!</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cadastros.estoques') }}">Cadastre Estoque</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('auth.logout') }}">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<main class="hero">
    <div class="container text-center">
        @if ($estoques->count() === 0)
            <p class="lead">Sem estoques</p>
            <a href="{{ route('cadastros.estoques') }}" class="btn btn-primary btn-lg">Click para cadastrar um estoque</a>
        @else
            <h1 class="display-4">Você tem {{ $estoques->count() }} estoque(s)</h1>
            <section class="features">
                <div class="container">
                    <div class="row">
                        @foreach ($estoques as $estoque)
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $estoque->titulo }}</h5>
                                        <p class="card-text">{{ $estoque->descricao }}</p>
                                        <a href="{{ route('site.mostrar.estoques', ['estoqueId', $estoque->id]) }}" 
                                            class="btn btn-primary">Saiba mais {{ $estoque->id }}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    </div>
</main>
