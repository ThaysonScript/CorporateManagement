@extends('layouts.layoutGeral')

@section('titulo-pagina')
    Registro
@endsection

@section('conteudo-pagina')
    
    <div class="row container-fluid vh-100 d-flex justify-content-center align-items-center bg-primary text-white">

        @if ($errors->any())
            <div class="text-center">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif

        <div class="row border border-danger text-center">
            <h1>Registro</h1>
        </div>
    
        <div class="h-75 d-flex justify-content-center align-items-start border border-danger">

            <form action="{{ route('autenticacao.registrarUsuario') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>

                    <input type="text" class="form-control" name="name" id="name">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>

                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha:</label>

                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="mb-3">
                    <label for="passwordConfirm" class="form-label">confirmarSenha:</label>

                    <input type="password" class="form-control" name="passwordConfirm" id="passwordConfirm">
                </div>
    
                <button type="submit" class="btn btn-dark">Enviar</button>

            </form>

        </div>
    </div>

@endsection