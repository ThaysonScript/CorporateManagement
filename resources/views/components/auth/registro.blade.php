<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->

    <div class="container">
        <div class="card">
            <h1 class="card-title mt-5 mb-4">Crie sua conta</h1>
            <form action="{{ route('autenticacao.registrarUsuario') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Nome completo">
                </div>

                <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Endereço de e-mail">
                </div>

                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Senha">
                </div>

                <div class="mb-3">
                    <input type="password" class="form-control" name="passwordConfirm" placeholder="Confirmar senha">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Registrar</button>

                <p class="mt-3 text-center">Já possui uma conta? <a href="{{ route('autenticacao.login') }}">Faça login</a></p>
            </form>
        </div>
    </div>
</div>