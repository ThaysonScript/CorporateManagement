<header class="bg-dark text-white text-center">
    <div class="container py-2">
        <h1 class="display-4">Controle sua Regra de Negócio</h1>
        <p class="lead">Adicione um Novo Estoque</p>
    </div>
</header>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="bg-light p-4 rounded shadow">
                    <h2 class="mb-4 text-center">Cadastre seu Estoque</h2>
                    <form action="{{ route('cadastros.estoques-store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-lg" 
                            placeholder="Titulo" name="titulo">
                        </div>

                        <div class="mb-3">
                            <textarea class="form-control form-control-lg" rows="4" 
                            placeholder="Descricão" name="descricao"></textarea>
                        </div>

                        <div class="mb-3">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Adicionar uma Tag">
                                <button class="btn btn-outline-primary" type="button">Adicionar</button>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="input-group">
                                <input type="file" class="form-control" id="file" accept="image/*" multiple>
                                <label class="input-group-text" for="file">Carregar imagem (opcional)</label>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
                        </div>

                    </form>
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
