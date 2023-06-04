<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo-pagina')</title>

    {{-- Bootstrap Css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        body {
          background-color: #f8f9fa;
          max-height: 100vh;
        }
    
        .navbar {
          background-color: #fff;
        }
    
        .navbar {
          color: #212529;
        }
    
        .nav-link {
            color: #fff;
            background-color: #007bff;
        }
    
        .jumbotron {
          background-color: #212529;
          color: #fff;
          border-radius: 20px;
          box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
        }
    
        .jumbotron h1 {
          font-size: 3.5rem;
        }
    
        .jumbotron p {
          font-size: 1.5rem;
          color: #fff;
        }
    
        .jumbotron hr {
          border-color: #fff;
        }
    
        .jumbotron a.btn-primary {
          background-color: #007bff;
          border-color: #007bff;
          font-size: 1.2rem;
          padding: 10px 25px;
          color: #fff;
        }
    
        .jumbotron a.btn-primary:hover {
          background-color: #0056b3;
          border-color: #0056b3;
        }
    
        .card {
          border-radius: 20px;
          box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }
    
        .card h5 {
          font-size: 1.5rem;
        }
    
        .card p {
          font-size: 1.2rem;
        }
    
        #stockList {
          display: flex;
          justify-items: center;
          justify-content: space-evenly;
        }
    
        #footer {
          width: 100%;
        }
      </style>

</head>
<body>
    {{-- Barra de navegação --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Gerenciador de Estoques</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    
                    <a class="btn btn-primary me-md-2" href="{{ route('site.home') }}">Home</a>

                    <a href="{{ route('cadastroEstoques.categoriaEstoque') }}" class="btn btn-primary">Cadastre seus Estoques</a>
                    <a class="btn btn-primary" href="{{ route('site.visualizar.estoques') }}">Ver Estoques</a>

                    <a href="{{ route('cadastroEstoques.categoriaProduto') }}" class="btn btn-primary">Cadastre Categoria para Produto</a>
                    <a class="btn btn-primary" href="{{ route('site.visualizar.categoriaProduto') }}">Ver Categoria de Produtos</a>

                    <a href="{{ route('cadastroEstoques.produto') }}" class="btn btn-primary">Cadastre Produto</a>
                    <a class="btn btn-primary" href="{{ route('site.visualizar.produtos') }}">Ver Produtos</a>

                    {{-- adicionar depois rotas referentes --}}
                    <a href="#" class="btn btn-primary">Cadastre Fornecedores</a>
                    <a class="btn btn-primary" href="#">Ver Fornecedores</a>

                    <a class="btn btn-primary" href="{{ route('autenticacao.logout') }}">Sair</a>
                </div>
            </div>
        </div>
    </nav>
    
    @yield('conteudo-pagina')

    {{-- Script para filtrar os estoques conforme a pesquisa --}}
    <script>
        document.getElementById("PesquisarEstoque").addEventListener("input", function ()
        {
          let entrada = document.getElementById("PesquisarEstoque").value;
          let cards = document.getElementById("stockList").getElementsByClassName("card");
  
          let filtrar = entrada.toUpperCase();
      
          for (let i = 0; i < cards.length; i++) {
            let card = cards[i];
            let titulo = card.getElementsByClassName("card-title")[0];
      
            if (titulo.innerText.toUpperCase().indexOf(filtrar) > -1) {
              card.style.display = "";
            } else {
              card.style.display = "none";
            }
          }
        });
      </script>

    {{-- Bootstrap Script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>