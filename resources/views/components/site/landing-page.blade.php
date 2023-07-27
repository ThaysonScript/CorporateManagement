<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-2">
        <div class="container">
            <a class="navbar-brand" href="{{ route('site.inicialPage') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                    class="bi bi-box-seam-fill me-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461L10.404 2Z" />
                </svg>
                Corporate Management
            </a>
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16">
                        <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z"/>
                      </svg>
                </div>
                <div class="text-center">
                    <h5>Gerencie seus Estoques</h5>
                    <p>Cadastre Estoques, categorias, produtos, fornecedores e muito mais. Somente aqui você tem tudo de
                        graça</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                        <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                        <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                        <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                      </svg>
                </div>
                <div class="text-center">
                    <h5>Fácil de Usar</h5>
                    <p>A maneira a qual você utilizará este serviço não irá tomar todo o seu tempo, pelo contrário, só
                        ganhará cada vez mais horas do seu dia.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                        <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                      </svg>
                </div>
                <div class="text-center">
                    <h5>Resultados Incríveis</h5>
                    <p>Ajude sua empresa a alcançar resultados incríveis com o nosso gerenciador de negócios de ponta a
                        ponta.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="app-presentation" class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <h2 class="display-4">Descubra o Futuro do Gerenciamento de Estoque com Nosso App Revolucionário!</h2>
                <p class="lead">Simplifique o gerenciamento do estoque da sua empresa com nosso App de última geração. Com uma interface intuitiva e recursos avançados, estamos aqui para tornar sua experiência mais eficiente e produtiva.</p>
                <a href="{{ route('site.aplicativo') }}" class="btn btn-light btn-lg mt-4">Experimente Agora</a>
            </div>
        </div>
    </div>
</section>


<footer class="footer bg-dark text-white text-center py-3">
    <div class="container">
        <p class="m-0">&copy; 2023 Todos os direitos reservados</p>
    </div>
</footer>
