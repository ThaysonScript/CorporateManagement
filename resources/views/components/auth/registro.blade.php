<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">

                    <h1 class="text-center mb-4">Registro</h1>

                    <form action="{{ route('autenticacao.registrarUsuario') }}" method="POST">
                        @csrf
                        {{-- name input --}}
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" placeholder="Digite seu nome"
                                name="name">
                        </div>

                        {{-- email input --}}
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail"
                                name="email">
                        </div>

                        {{-- password input --}}
                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="password" placeholder="Digite sua senha"
                                name="password">
                        </div>

                        {{-- passwordConfirm input --}}
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Confirmação de Senha</label>
                            <input type="password" class="form-control" id="confirm_password"
                                placeholder="Confirme sua senha" name="passwordConfirm">
                        </div>

                        <div class="d-grid">

                            {{-- submit input --}}
                            <button type="submit" class="btn btn-primary">Registrar</button>

                        </div>

                        <p class="mt-3 text-center">Já possui uma conta? <a
                                href="{{ route('autenticacao.login') }}">Faça login</a></p>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
