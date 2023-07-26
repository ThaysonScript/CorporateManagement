<header>
    <div class="grid row bg-dark p-2">
        <div class="text-center ms-5 me-5 col-1">
            <x-layouts.menus.menu></x-layouts.menus.menu>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark col-10">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('site.home') }}">Seja bem vindo {{ $usuarioLogado }}!</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('site.home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('site.inicialPage') }}">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('cadastros.estoques') }}" class="nav-link">Cadastre Estoque</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('cadastros.categorias') }}" class="nav-link">Cadastre Categoria</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('cadastros.produtos') }}" class="nav-link">Cadastre Produto</a>
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