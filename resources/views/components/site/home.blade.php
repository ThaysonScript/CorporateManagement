<main class="hero">
    <div class="container text-center">
        @if ($estoques->count() === 0)
            <p class="lead">Sem estoques</p>
            <a href="{{ route('cadastros.estoques') }}" class="btn btn-primary btn-lg">Click para cadastrar um estoque</a>
        @else
            <h1 class="display-4">Você tem {{ $estoques->count() }} estoque(s)</h1>
            <section class="features">
                <div class="container">
                    <div class="row">
                        @foreach ($estoques as $estoque)
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $estoque->titulo }}</h5>
                                        <p class="card-text">{{ $estoque->descricao }}</p>
                                        <a href="{{ route('site.mostrar.estoques', ['estoqueId', $estoque->id]) }}" 
                                            class="btn btn-primary">Saiba mais {{ $estoque->id }}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    </div>
</main>
