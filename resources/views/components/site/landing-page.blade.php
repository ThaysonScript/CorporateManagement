<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item text-white h5 me-4 border border-light rounded">
                        <a class="nav-link link-opacity-100" href="{{ route('auth.login') }}">Entrar</a>
                    </li>
                    <li class="nav-item text-white h5 border border-light rounded ms-4">
                        <a class="nav-link link-opacity-100" href="{{ route('auth.registro') }}">Se Cadastre
                            Agora!</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<section class="hero bg-light text-center py-5">
    <div class="container">
        <h1 class="display-4">Gerencie sua regra de negócios de maneira simples rápida e moderna</h1>
        <p class="lead">Aqui você somente utiliza e deixa que gerenciamos tudo para você.</p>
        <a href="#features" class="btn btn-primary btn-lg mt-5">Saiba Mais</a>
    </div>
</section>

<section id="features" class="py-5 mb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="text-center mb-4">
                    <i class="fas fa-laptop fa-3x"></i>
                </div>
                <h3 class="h5">Gerencie seus Estoques</h3>
                <p>Cadastre Estoques, categorias, produtos, fornecedores e muito mais. Somente aqui você tem tudo de
                    graça</p>
            </div>
            <div class="col-md-4">
                <div class="text-center mb-4">
                    <i class="fas fa-cogs fa-3x"></i>
                </div>
                <h3 class="h5">Fácil de Usar</h3>
                <p>A maneira a qual você utilizará este serviço não irá tomar todo o seu tempo, pelo contrário, só
                    ganhará cada vez mais horas do seu dia.</p>
            </div>
            <div class="col-md-4">
                <div class="text-center mb-4">
                    <i class="fas fa-hand-holding-usd fa-3x"></i>
                </div>
                <h3 class="h5">Resultados Incríveis</h3>
                <p>Ajude sua empresa a alcançar resultados incríveis com o nosso gerenciador de negócios de ponta a
                    ponta.</p>
            </div>
        </div>
    </div>
</section>

<footer class="footer bg-dark text-white text-center py-3">
    <div class="container">
        <p class="m-0">&copy; 2023 Todos os direitos reservados</p>
    </div>
</footer>
