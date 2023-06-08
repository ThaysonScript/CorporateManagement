<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->
    <div class="container">
        <div class="card">
          <h1 class="card-title mt-5 mb-4">Faça login</h1>
          <form action="{{ route('autenticacao.loginEntrando') }}" method="POST">
            @csrf
            <div class="mb-3">
              <input type="email" class="form-control" name="email" placeholder="Endereço de e-mail">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" name="password" placeholder="Senha">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
            <p class="mt-3 text-center">Ainda não possui uma conta? <a href="{{ route('autenticacao.registro') }}">Registre-se</a></p>
          </form>
        </div>
    </div>
</div>