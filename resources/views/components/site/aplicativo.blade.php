<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>App de Exemplo - Página de Apresentação</title>
  <!-- Inclua os links para os arquivos do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Estilos personalizados */
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .hero-section {
      background-color: #007BFF;
      color: #FFFFFF;
    }

    .recursos-section .card {
      border: none;
      border-radius: 0;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      transition: box-shadow 0.3s ease-in-out;
    }

    .recursos-section .card:hover {
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .sobre-section {
      background-color: #F0F0F0;
    }

    .contato-section {
      background-color: #F8F9FA;
    }

    footer {
      color: #FFFFFF;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">App de Exemplo</a>
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
            <a class="nav-link" href="#">Recursos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-section py-5 text-center">
    <div class="container">
      <h1 class="display-4">Bem-vindo ao App de Exemplo</h1>
      <p class="lead">Uma descrição curta e atraente do seu aplicativo.</p>
      <a href="#" class="btn btn-primary btn-lg">Experimente Agora</a>
    </div>
  </section>

  <!-- Recursos Section -->
  <section class="recursos-section py-5">
    <div class="container">
      <h2 class="text-center mb-4">Recursos do App</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 p-4 text-center">
            <i class="bi bi-speedometer2 fs-2 text-primary mb-3"></i>
            <h4 class="card-title">Recurso 1</h4>
            <p class="card-text">Uma breve descrição do primeiro recurso do aplicativo.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 p-4 text-center">
            <i class="bi bi-gear fs-2 text-primary mb-3"></i>
            <h4 class="card-title">Recurso 2</h4>
            <p class="card-text">Uma breve descrição do segundo recurso do aplicativo.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 p-4 text-center">
            <i class="bi bi-chat-dots fs-2 text-primary mb-3"></i>
            <h4 class="card-title">Recurso 3</h4>
            <p class="card-text">Uma breve descrição do terceiro recurso do aplicativo.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sobre Section -->
  <section class="sobre-section py-5">
    <div class="container">
      <h2 class="text-center mb-4">Sobre o App</h2>
      <p class="lead text-center">Algumas informações sobre o aplicativo e sua história.</p>
    </div>
  </section>

  <!-- Contato Section -->
  <section class="contato-section py-5">
    <div class="container">
      <h2 class="text-center mb-4">Entre em Contato</h2>
      <p class="lead text-center mb-4">Preencha o formulário abaixo para entrar em contato conosco.</p>
      <form>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" class="form-control" id="nome">
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label for="email" class="form-label">E-mail</label>
              <input type="email" class="form-control" id="email">
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="mensagem" class="form-label">Mensagem</label>
          <textarea class="form-control" id="mensagem" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
      </form>
    </div>
  </section>

  <!-- Rodapé -->
  <footer class="py-4 bg-dark text-white text-center">
    <div class="container">
      <p>Todos os direitos reservados &copy; 2023 App de Exemplo</p>
    </div>
  </footer>

  <!-- Inclua os scripts do Bootstrap e do Bootstrap Icons -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.20.0/dist/js/bootstrap-icons.min.js"></script>
</body>

</html>
