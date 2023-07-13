<header class="bg-dark text-white text-center">
    <div class="container py-2">
        <h1 class="display-4">Controle sua Regra de Negócio</h1>
        <p class="lead">Adicione uma Nova Categoria</p>
    </div>
</header>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="bg-light p-4 rounded shadow text-center">
                    <h2 class="mb-4">Cadastre uma Categoria</h2>
                    <form action="{{ route('cadastros.categorias-store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="tituloCategoria" id="tituloCategoria" class="form-control"
                                placeholder="Nome da Categoria">
                        </div>

                        <div class="mb-3">
                            <textarea name="descricaoCategoria" id="descricaoCategoria" 
                            class="form-control" cols="30" rows="4" placeholder="Descrição da Categoria"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="estoques_id">Tipo de Estoque</label>
                            <select name="estoques_id" id="estoques_id" class="form-control">
                                @foreach ($estoques as $estoque)
                                <option value="{{ $estoque->id }}">{{ $estoque->titulo }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg">Salvar Categoria</button>
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
