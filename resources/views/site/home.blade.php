@extends('layouts.geral.layoutGeral')

@section('titulo-pagina')
    Home
@endsection

@section('conteudo-pagina')
    <h1>pagina home</h1>

    <div>
        <p><a href="{{ route('autenticacao.logout') }}">Deseja Sair?</a></p>
    </div>
@endsection