<h1 class="text-center">Produtos</h1>
<div class="container d-flex justify-content-center text-center column">
    
    {{-- @foreach ($produtos as $produto) --}}
    <div class="d-flex justify-content-center text-center">
        <div class="card text-center mb-3">
            <div class="card-body">
                {{-- <h5>{{ $produto->tituloProduto }}</h5>
                <p>{{ $produto->descricaoProduto }}</p>
                <p>{{ $produto->quantidadeProdutoEstoque }}</p>
                <p>{{ $produto->fornecedorProduto }}</p> --}}
                {{ $produtos->tituloProduto }}
                {{ $produtos->descricaoProduto }}
            </div>
        </div>
    </div>
    {{-- @endforeach --}}
</div>