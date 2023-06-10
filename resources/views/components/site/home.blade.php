<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Seja bem vindo {{ $usuarioLogado }}!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('autenticacao.logout') }}">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<section class="hero">
    <div class="container text-center">
        <h1 class="display-4">Bem-vindo à nossa Página Inicial</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rhoncus fringilla lectus, eu
            condimentum ex tincidunt at.</p>
        <a href="#" class="btn btn-primary btn-lg">Saiba Mais</a>
    </div>
</section>

<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Imagem de recurso">
                    <div class="card-body">
                        <h5 class="card-title">Recurso 1</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Imagem de recurso">
                    <div class="card-body">
                        <h5 class="card-title">Recurso 2</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Imagem de recurso">
                    <div class="card-body">
                        <h5 class="card-title">Recurso 3</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="bg-dark text-white text-center py-3">
    <div class="container">
        <p>&copy; 2023 Todos os direitos reservados</p>
    </div>
</footer>
