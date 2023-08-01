<!-- Header -->
<header class="bg-dark text-white text-center py-3">
    <div class="container">
        <h1 class="display-4">Controle sua Regra de Negócio</h1>
        <p class="lead">Adicione um Novo Fornecedor</p>
    </div>
</header>

<!-- Formulário -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="bg-light p-4 rounded shadow">
                    <h2 class="mb-4 text-center">Cadastre seu Fornecedor</h2>
                    <form action="{{ route('cadastros.fornecedores-store') }}" method="POST">
                        @csrf

                        <!-- Informações do Fornecedor -->
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-lg" placeholder="Nome do Fornecedor"
                                name="nome">
                        </div>

                        <div class="mb-3">
                            <input type="email" class="form-control form-control-lg"
                                placeholder="E-mail do Fornecedor" name="email">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control form-control-lg"
                                placeholder="Telefone do Fornecedor" name="telefone">
                        </div>

                        <div class="mb-3">
                            <textarea class="form-control form-control-lg" rows="4" placeholder="Endereço"
                                name="endereco"></textarea>
                        </div>

                        <!-- Opções de Associação -->
                        <div class="container mt-4">
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input associar-checkbox" id="estoque"
                                    name="associarEstoque">
                                <label class="form-check-label" for="estoque">Associar ao Estoque</label>
                            </div>

                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input associar-checkbox" id="categoria"
                                    name="associarCategoria">
                                <label class="form-check-label" for="categoria">Associar à Categoria</label>
                            </div>

                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input associar-checkbox" id="produto"
                                    name="associarProduto">
                                <label class="form-check-label" for="produto">Associar ao Produto</label>
                            </div>

                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input associar-checkbox" id="todos"
                                    name="associarTodos">
                                <label class="form-check-label" for="todos">Associar a Todos</label>
                            </div>

                            <!-- Opções de Seleção -->
                            <div class="form-group select-form" style="display:none;" id="select-estoque">
                                <label for="estoque_id">Selecionar Estoque</label>
                                <select class="form-control" name="estoque_id">
                                    <option value="1">Estoque 1</option>
                                    <option value="2">Estoque 2</option>
                                    <option value="3">Estoque 3</option>
                                    <!-- Mais opções do estoque -->
                                </select>
                            </div>

                            <div class="form-group select-form" style="display:none;" id="select-categoria">
                                <label for="categoria_id">Selecionar Categoria</label>
                                <select class="form-control" name="categoria_id">
                                    <option value="1">Categoria 1</option>
                                    <option value="2">Categoria 2</option>
                                    <option value="3">Categoria 3</option>
                                    <!-- Mais opções das categorias -->
                                </select>
                            </div>

                            <div class="form-group select-form" style="display:none;" id="select-produto">
                                <label for="produto_id">Selecionar Produto</label>
                                <select class="form-control" name="produto_id">
                                    <option value="1">Produto 1</option>
                                    <option value="2">Produto 2</option>
                                    <option value="3">Produto 3</option>
                                    <!-- Mais opções dos produtos -->
                                </select>
                            </div>
                        </div>

                        <!-- Botão de Envio -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white py-2 text-center">
    <div class="container">
        <p>© 2023 CorpManager. Todos os direitos reservados.</p>
    </div>
</footer>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var checkboxes = document.querySelectorAll(".associar-checkbox");
        var selectEstoque = document.getElementById("select-estoque");
        var selectCategoria = document.getElementById("select-categoria");
        var selectProduto = document.getElementById("select-produto");
        var checkboxTodos = document.getElementById("todos");

        checkboxes.forEach(function (checkbox) {
            checkbox.addEventListener("change", function () {
                var checkboxId = this.id;
                var selectId = "select-" + checkboxId;
                var selectElement = document.getElementById(selectId);

                if (this.checked) {
                    selectElement.style.display = "block";
                    if (checkboxId === "todos") {
                        checkboxes.forEach(function (otherCheckbox) {
                            if (otherCheckbox !== checkbox) {
                                otherCheckbox.checked = false;
                                var otherSelectId = "select-" + otherCheckbox.id;
                                var otherSelectElement = document.getElementById(
                                    otherSelectId);
                                otherSelectElement.style.display = "none";
                            }
                        });
                    } else if (checkboxTodos.checked) {
                        checkboxTodos.checked = false;
                        selectEstoque.style.display = "none";
                        selectCategoria.style.display = "none";
                        selectProduto.style.display = "none";
                    }
                } else {
                    selectElement.style.display = "none";
                    if (checkboxId === "todos" && !checkboxTodos.checked) {
                        selectEstoque.style.display = "none";
                        selectCategoria.style.display = "none";
                        selectProduto.style.display = "none";
                    }
                }
            });
        });

        checkboxTodos.addEventListener("change", function () {
            if (this.checked) {
                checkboxes.forEach(function (checkbox) {
                    checkbox.checked = false;
                });
                selectEstoque.style.display = "block";
                selectCategoria.style.display = "block";
                selectProduto.style.display = "block";
            } else {
                selectEstoque.style.display = "none";
                selectCategoria.style.display = "none";
                selectProduto.style.display = "none";
            }
        });
    });
</script>