<header class="bg-dark text-white text-center">
    <div class="container-fluid py-2">
        <h1 class="display-4">Controle sua Regra de Negócio</h1>
        <p class="lead">Adicione um Novo Produto</p>
    </div>
</header>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="bg-light p-4 rounded shadow text-center">
                    <h2 class="mb-4">Cadastre um Produto</h2>
                    <form action="{{ route('cadastros.produtos-store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="tituloProduto" id="tituloProduto" class="form-control"
                                placeholder="Nome do Produto">
                        </div>

                        <div class="mb-3">
                            <textarea name="descricaoProduto" id="descricaoProduto" 
                            class="form-control" cols="30" rows="4" placeholder="Descrição do Produto"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="categorias_id">Tipo de Categoria</label>
                            <select name="categorias_id" id="categorias_id" class="form-control">
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->tituloCategoria }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg">Salvar Produto</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<footer class="bg-dark text-white py-2">
    <div class="container text-center">
        <p>© 2023 CorpManager. All rights reserved.</p>
    </div>
</footer>
