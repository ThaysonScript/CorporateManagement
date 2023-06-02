<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('titulo-pagina')</title>
  <!-- CSS do Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
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

        margin-right: 10px;
        padding-left: 20px;
        padding-right: 20px;
        border-radius: 5px;
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
  </style>
</head>

<body>

    @yield('conteudo-pagina')

    <!-- Script para filtrar os estoques conforme a pesquisa -->
    <script>
        document.getElementById("searchStock").addEventListener("input", function () {
        var input, filter, cards, card, title, i;
        input = document.getElementById("searchStock");
        filter = input.value.toUpperCase();
        cards = document.getElementById("stockList").getElementsByClassName("card");
    
        for (i = 0; i < cards.length; i++) {
            card = cards[i];
            title = card.getElementsByClassName("card-title")[0];
    
            if (title.innerText.toUpperCase().indexOf(filter) > -1) {
            card.style.display = "";
            } else {
            card.style.display = "none";
            }
        }
        });
    </script>
    
    <!-- Scripts do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
