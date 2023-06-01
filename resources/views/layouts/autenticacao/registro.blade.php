<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  <style>
    body {
      background-color: #1DA1F2;
      background-image: linear-gradient(to bottom right, #1DA1F2, #14171A);
      color: #fff;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .card {
      background-color: rgba(255, 255, 255, 0.9);
      border-radius: 10px;
      padding: 30px;
      max-width: 400px;
      width: 100%;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    }

    .card-title {
      text-align: center;
      margin-bottom: 30px;
      color: #1DA1F2;
    }

    .form-control:focus {
      box-shadow: 0 0 0 0.2rem rgba(29, 161, 242, 0.25);
      border-color: #1DA1F2;
    }

    .btn-primary {
      background-color: #1DA1F2;
      border-color: #1DA1F2;
    }

    .btn-primary:hover {
      background-color: #0F8FE3;
      border-color: #0F8FE3;
    }

    .btn-primary:focus {
      box-shadow: 0 0 0 0.2rem rgba(29, 161, 242, 0.5);
    }

    .error-message {
      color: #dc3545;
      font-size: 14px;
    }
  </style>
  <title>@yield('titulo-pagina')</title>
</head>
<body>

  @yield('conteudo-pagina')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
