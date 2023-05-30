@extends('layouts.login')

@section('titulo-pagina')
    Login
@endsection

@section('conteudo-pagina')
    
<div class="container">
    <div class="card">
      <h1 class="card-title mt-5 mb-4">Faça login</h1>
      <form>
        <div class="mb-3">
          <input type="email" class="form-control" placeholder="Endereço de e-mail">
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Entrar</button>
        <p class="mt-3 text-center">Ainda não possui uma conta? <a href="{{ route('autenticacao.registro') }}">Registre-se</a></p>
      </form>
    </div>
  </div>

@endsection
