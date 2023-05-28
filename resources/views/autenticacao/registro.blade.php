@extends('layouts.layoutGeral')

@section('titulo-pagina')
    Registro
@endsection

@section('conteudo-pagina')
    
    <div class="row container-fluid vh-100 d-flex justify-content-center align-items-center bg-primary text-white">

        <div class="row border border-danger text-center">
            <h1>Registro</h1>
        </div>
    
        <div class="h-75 d-flex justify-content-center align-items-start border border-danger">

            <form action="{{ route('autenticacao.registrarUsuario') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="Email" class="form-label">Email:</label>

                    <input type="email" class="form-control" name="Email" id="Email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="Senha" class="form-label">Senha:</label>

                    <input type="password" class="form-control" name="Senha" id="Senha">
                </div>
                <div class="mb-3">
                    <label for="confirmarSenha" class="form-label">confirmarSenha:</label>

                    <input type="password" class="form-control" name="ConfirmarSenha" id="confirmarSenha">
                </div>
    
                <button type="submit" class="btn btn-dark">Enviar</button>

            </form>
        </div>
    </div>

@endsection