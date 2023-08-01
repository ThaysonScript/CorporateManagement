@if (session('message'))
    <div class="alert alert-success">
        <p class="text-center">{{ session('message') }}</p>
    </div>
@endif

<div class="container mt-5 fw-bold">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center mb-4">Registro</h1>
                    <form action="{{ route('auth.registro-store') }}" method="POST">
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

                        {{-- submit input --}}
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>

                        <p class="mt-3 text-center">Já possui uma conta? <a href="{{ route('auth.login') }}">Faça
                                login</a>
                        </p>
                    </form>

                    <div class="text-center">
                        <p>Entre com:</p>
                        <a href="{{ route('auth.google.redirecionar') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-google text-black" viewBox="0 0 16 16">
                                <path
                                    d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
