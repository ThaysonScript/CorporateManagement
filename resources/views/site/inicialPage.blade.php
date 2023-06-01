@extends('layouts.landingPage.inicialPageLayout')

@section('titulo-pagina')
    Gerenciador de Estoques
@endsection

@section('conteudo-pagina')
    
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Gerenciador de Estoque</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link1 btn btn-primary text-white" href="{{ route('autenticacao.login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link2 btn btn-primary text-white" href="{{ route('autenticacao.registro') }}">Registro</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="header">
    <div class="container">
      <h1>Bem-vindo ao Gerenciador de Estoque</h1>
      <a class="btn btn-primary btn-get-started" href="#">Começar Agora</a>
    </div>
  </div>

  <div class="features">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <h2>Fácil de Usar</h2>
            <p>Interface intuitiva e amigável, facilitando o gerenciamento de produtos e estoque.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <h2>Controle de Estoque</h2>
            <p>Registre e acompanhe o estoque de forma precisa, evitando faltas ou excessos de produtos.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <h2>Relatórios Detalhados</h2>
            <p>Gere relatórios completos sobre vendas, estoque atual, histórico de pedidos e muito mais.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection