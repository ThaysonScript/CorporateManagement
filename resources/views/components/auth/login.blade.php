@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center mb-4">Login</h1>
                    <form action="{{ route('auth.login-entrar') }}" method="POST">
                        @csrf

                        {{-- email input --}}
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" 
                            placeholder="Digite seu e-mail" name="email">
                        </div>

                        {{-- password input --}}
                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="password" 
                            placeholder="Digite sua senha"
                                name="password">
                        </div>

                        {{-- submit input --}}
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </div>

                        <p class="mt-3 text-center">Ainda não possui uma conta? <a
                            href="{{ route('auth.registro') }}">Faça o Registro</a>
                        </p>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
