<header class="container-fluid">
    <div class="grid row bg-dark p-2">
        <div class="text-center ms-5 me-5 col-1">
            <x-layouts.menus.menu></x-layouts.menus.menu>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark col-10">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('site.home') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="25" fill="currentColor" class="bi bi-box-seam-fill me-2" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461L10.404 2Z"/>
                  </svg>
                    Seja bem vindo {{ $usuarioLogado }}!
                </a>
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