<h1 class="text-center">Estoques</h1>
<div class="container d-flex justify-content-center text-center column">
    
    @foreach ($estoquesTotais as $estoque)
    <div class="d-flex justify-content-center text-center">
        <div class="card text-center mb-3">
            <div class="card-body">
                <h5>{{ $estoque->tituloCategoriaEstoque }}</h5>
                <p>{{ $estoque->descricaoCategoriaEstoque }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>