<h1 class="text-center">Categoria de Produtos</h1>
<div class="container d-flex justify-content-center text-center column">
    
    @foreach ($categorias as $categoria)
    <div class="d-flex justify-content-center text-center">
        <div class="card text-center mb-3">
            <div class="card-body">
                <h5>{{ $categoria->tituloCategoria }}</h5>
                <p>{{ $categoria->descricaoCategoria }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>