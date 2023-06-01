<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
  <title>@yield('titulo-pagina')</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://dhg1h5j42swfq.cloudfront.net/2021/10/06104806/imagem-kbca-estoques.jpg');
      background-size: cover;
      background-position: center;
      color: #fff;
    }

    .navbar {
      background-color: transparent;
    }

    .navbar-brand {
      font-weight: bold;
      color: #fff;
    }

    .navbar-nav {
      color: #fff;
    }

    .nav-link1 {
      color: #fff;
      margin-right: 50px;
      padding-left: 20px;
      padding-right: 20px;
    }

    .nav-link2 {
      color: #fff;
    }

    .header {
      text-align: center;
      padding: 100px 0;
    }

    .header h1 {
      font-size: 48px;
      font-weight: bold;
      color: #fff;
      margin-bottom: 40px;
    }

    .features {
      padding: 60px 0;
      text-align: center;
    }

    .features h2 {
      font-size: 36px;
      font-weight: bold;
      margin-bottom: 40px;
      color: #fff;
    }

    .features p {
      font-size: 18px;
      margin-bottom: 30px;
      color: #fff;
    }

    .card {
      background-color: #fff;
      color: #000;
      border: none;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
      margin-bottom: 30px;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.2);
    }

    .card h2 {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
      color: #000;
    }

    .card p {
      font-size: 16px;
      line-height: 1.5;
      margin-bottom: 30px;
      color: #555;
    }

    .btn-get-started {
      font-size: 20px;
      padding: 15px 40px;
      margin-top: 30px;
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-get-started:hover {
      background-color: #0069d9;
      border-color: #0062cc;
    }
  </style>
</head>

<body>

    @yield('conteudo-pagina')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
