<header class="bg-dark text-white text-center py-3">
    <div class="container">
        <h1 class="display-4">Controle sua Regra de Negócio</h1>
        <p class="lead">Adicione um Novo Fornecedor</p>
    </div>
</header>

<section class="py-4">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="bg-light p-4 rounded shadow">
                    <h2 class="mb-4 text-center">Cadastre seu Fornecedor</h2>

                    {{-- Informações do Fornecedor --}}
                    <form action="{{ route('cadastros.fornecedores-store') }}" method="POST" class="was-validated">
                        @csrf

                        {{-- row 1 --}}
                        <div class="row mb-4">

                            {{-- fornecedor nome input --}}
                            <div class="container col">
                                <label for="fornecedorNome">Nome: <span class="text-danger">*</span></label>
                                <div class="mb-3 input-group col">
                                    <input type="text" class="form-control form-control-lg"
                                        placeholder="Nome do Fornecedor" name="fornecedorNome" required>
                                    <div class="invalid-tooltip">
                                        Digite nome do fornecedor
                                    </div>
                                </div>
                            </div>

                            {{-- email input --}}
                            <div class="container col">
                                <label for="email">Email: <span class="text-danger">*</span></label>
                                <div class="mb-3 input-group col">
                                    <input type="email" class="form-control form-control-lg"
                                        placeholder="E-mail do Fornecedor" name="email" required>
                                    <div class="invalid-tooltip">
                                        Digite email do fornecedor
                                    </div>
                                </div>
                            </div>

                            {{-- empresa nome input --}}
                            <div class="container col">
                                <label for="fornecedorEmpresa">Empresa do Fornecedor: </label>
                                <div class="mb-3 input-group col">
                                    <input type="text" class="form-control form-control-lg" name="fornecedorEmpresa"
                                        id="fornecedorEmpresa" placeholder="Empresa do fornecedor">
                                </div>
                            </div>
                        </div>

                        {{-- row 2 --}}
                        <div class="row mb-4">

                            {{-- input telefone --}}
                            <div class="container col">
                                <label for="telefone">Telefone: <span class="text-danger">*</span></label>
                                <div class="mb-3 input-group col">
                                    <input type="tel" class="form-control form-control-lg"
                                        placeholder="Telefone do Fornecedor" name="telefone" required>
                                    <div class="invalid-tooltip">
                                        Digite telefone do fornecedor
                                    </div>
                                </div>
                            </div>

                            {{-- input endereco --}}
                            <div class="container col">
                                <label for="endereco">Endereço: <span class="text-danger">*</span></label>
                                <div class="mb-3 input-group col">
                                    <input type="text" class="form-control form-control-lg" name="endereco"
                                        id="endereco" placeholder="Digite endereco do fornecedor" required>
                                    <div class="invalid-tooltip">
                                        Digite endereco do fornecedor
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- row 3 --}}
                        <div class="row mb-4">

                            {{-- input servico prestado --}}
                            <div class="container col">
                                <label for="servicoPrestado">Serviço Prestado: <span
                                        class="text-danger">*</span></label>
                                <div class="mb-3 input-group col">
                                    <input type="text" class="form-control form-control-lg" name="servicoPrestado"
                                        id="endereco" placeholder="Digite o serviço prestado" required>
                                    <div class="invalid-tooltip">
                                        Digite o serviço prestado
                                    </div>
                                </div>
                            </div>

                            {{-- input pessoa type --}}
                            <div class="container col">
                                <label for="tipo">Tipo de Pessoa: <span class="text-danger">*</span></label>
                                <div class="mb-3 col">
                                    <select name="tipo" id="tipo" class="form-control form-control-lg" required>
                                        <option value="">Selecione uma opção</option>
                                        <option value="pessoa_fisica">Pessoa Física</option>
                                        <option value="pessoa_juridica">Pessoa Jurídica</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        {{-- row 4 --}}
                        <div class="row">

                            {{-- input pais - default('Brasil') --}}
                            <div class="container col">
                                <label for="pais">País - padrão-Brasil: </label>
                                <div class="mb-3 input-group col">
                                    <input type="text" class="form-control form-control-lg" name="pais"
                                        id="pais" placeholder="Digite o pais de origem">
                                </div>
                            </div>

                            {{-- input estado --}}
                            <div class="container col">
                                <label for="estado">Estado: </label>
                                <div class="mb-3 input-group col">
                                    <input type="text" class="form-control form-control-lg" name="estado"
                                        id="estado" placeholder="Digite o estado de origem">
                                </div>
                            </div>

                            {{-- input cidade --}}
                            <div class="container col">
                                <label for="cidade">Cidade: </label>
                                <div class="mb-3 input-group col">
                                    <input type="text" class="form-control form-control-lg" name="cidade"
                                        id="cidade" placeholder="Digite a cidade de origem">
                                </div>
                            </div>
                        </div>


                        {{-- fornecedor pertence a ? --}}
                        <div class="container row mt-4 mb-4">

                            {{-- algum estoque --}}
                            <div class="form-check mb-2 col">
                                <label class="form-check-label" for="estoque">Associar a um Estoque</label>
                                <input type="checkbox" class="form-check-input associar-checkbox" id="estoque"
                                    name="associarEstoque">
                            </div>

                            {{-- alguma categoria --}}
                            <div class="form-check mb-2 col">
                                <label class="form-check-label" for="categoria">Associar a uma Categoria</label>
                                <input type="checkbox" class="form-check-input associar-checkbox" id="categoria"
                                    name="associarCategoria">
                            </div>

                            {{-- algum produto --}}
                            <div class="form-check mb-2 col">
                                <label class="form-check-label" for="produto">Associar a um Produto</label>
                                <input type="checkbox" class="form-check-input associar-checkbox" id="produto"
                                    name="associarProduto">
                            </div>

                            {{-- a todos --}}
                            <div class="form-check mb-2 col">
                                <label class="form-check-label" for="todos">Associar a Todos</label>
                                <input type="checkbox" class="form-check-input associar-checkbox" id="todos"
                                    name="associarTodos">
                            </div>




                            {{-- selecao estoque --}}
                            <div class="form-group select-form" style="display:none;" id="select-estoque">
                                <label for="estoque_id">Selecionar Estoque: </label>
                                <select class="form-control" name="estoque_id" required>
                                    <option value="">Selecione um Estoque</option>
                                    @foreach ($estoques as $estoque)
                                        <option value="{{ $estoque->id }}">{{ $estoque->titulo }}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- selecao categoria --}}
                            <div class="form-group select-form" style="display:none;" id="select-categoria">
                                <label for="categoria_id">Selecionar Categoria: </label>
                                <select class="form-control" name="categoria_id">
                                    <option value="">Selecione uma Categoria</option>
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->tituloCategoria }}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- selecao produto --}}
                            <div class="form-group select-form" style="display:none;" id="select-produto">
                                <label for="produto_id">Selecionar Produto: </label>
                                <select class="form-control" name="produto_id">
                                    <option value="">Selecione um Produto</option>
                                    @foreach ($produtos as $produto)
                                        <option value="{{ $produto->id }}">{{ $estoque->tituloProduto }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- enviar form --}}
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Salvar Fornecedor</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- footer --}}
<footer class="bg-dark text-white p-4 text-center">
    <div class="container">
        <p class="h5">© 2023 CorpManager. Todos os direitos reservados.</p>
    </div>
</footer>

{{-- scripts --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const checkboxes = document.querySelectorAll(".associar-checkbox");
        const checkboxTodos = document.getElementById("todos");
        const selects = document.querySelectorAll("[id^='select-']");

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener("change", function() {
                if (this !== checkboxTodos) {
                    checkboxTodos.checked = false;
                }

                selects.forEach(select => {
                    const selectId = select.id.split("-")[1];
                    const checkboxId = checkbox.id;

                    if (checkboxId === selectId) {
                        select.style.display = checkbox.checked ? "block" : "none";
                    }
                });
            });
        });

        checkboxTodos.addEventListener("change", function() {
            selects.forEach(select => {
                select.style.display = this.checked && select.id === "select-estoque" ?
                    "block" : "none";
            });

            checkboxes.forEach(otherCheckbox => {
                if (otherCheckbox !== checkboxTodos) {
                    otherCheckbox.checked = false;
                }
            });
        });
    });
</script>
