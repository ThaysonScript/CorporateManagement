@extends('layouts.autenticacao.registro')

@section('titulo-pagina')
    Registro
@endsection

@section('conteudo-pagina')

    <div class="container">
        <div class="card">
            <h1 class="card-title mt-5 mb-4">Crie sua conta</h1>
            <form action="{{ route('autenticacao.registrarUsuario') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Nome completo">
                </div>

                <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Endereço de e-mail">
                </div>

                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Senha">
                </div>

                <div class="mb-3">
                    <input type="password" class="form-control" name="passwordConfirm" placeholder="Confirmar senha">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Registrar</button>

                <p class="mt-3 text-center">Já possui uma conta? <a href="{{ route('autenticacao.login') }}">Faça login</a></p>
            </form>
        </div>
    </div>



    
    {{-- <div class="row container-fluid vh-100 d-flex justify-content-center align-items-center bg-primary text-white">

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
    </div> --}}

@endsection