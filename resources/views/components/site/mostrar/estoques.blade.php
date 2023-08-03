<main class="hero">
    <div class="container-fluid text-center">

        @if ($estoques->count() === 0)
            <p class="lead">Sem Estoques</p>
            <a href="{{ route('cadastros.estoques') }}" class="btn btn-primary btn-lg">
                Click para Cadastrar um Estoque
            </a>
        @else
            @if (session('sucesso'))
                <div class="alert alert-success">
                    {{ session('sucesso') }}
                </div>
            @elseif (session('erro'))
                <div class="alert alert-danger">
                    {{ session('erro') }}
                </div>
            @endif

            <h1 class="display-4">Você tem {{ $estoques->count() }} estoque(s)</h1>
            <div class="table-container">
                <div class="container-fluid">
                    <div class="table-responsive">

                        <table id="categoriesTable" class="table table-hover table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col" class="w-25">Título</th>
                                    <th scope="col" class="w-25">Descrição</th>
                                    <th scope="col" class="w-25">Fornecedores</th>
                                    <th scope="col" colspan="2" class="w-25">Opções</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($estoques as $estoque)
                                    <tr>
                                        {{-- id --}}
                                        <td>{{ $estoque->id }}</td>

                                        <form action="{{ route('cadastros.estoques-atualizar', $estoque->id) }}"
                                            method="post">
                                            @csrf
                                            @method('PUT')

                                            {{-- titulo --}}
                                            <td class="text-center">
                                                <input type="text" name="tituloEstoque"
                                                    value="{{ $estoque->titulo }}" id="tituloEstoque{{ $estoque->id }}"
                                                    readonly>
                                            </td>

                                            {{-- descricao --}}
                                            <td>
                                                <textarea class="form-control text-center" name="descricaoEstoque" id="descricaoEstoque{{ $estoque->id }}"
                                                    cols="50" rows="2" readonly>
                                                        {{ $estoque->descricao }}
                                                    </textarea>
                                            </td>

                                            {{-- fornecedores --}}
                                            <td>
                                                <textarea class="form-control text-center" name="fornecedorEstoque" id="fornecedorEstoque{{ $estoque->id }}"
                                                    cols="35" rows="2" readonly>
                                                    {{ $estoque->Fornecedor() }}
                                                </textarea>
                                            </td>

                                            {{-- opcoes --}}
                                            <td class="d-flex justify-content-end">

                                                <a href="{{ route('site.mostrar.categorias', $estoque->id) }}"
                                                    class="btn btn-primary btn-sm me-4">
                                                    Ver Categorias
                                                </a>

                                                <a href="{{ route('site.mostrar.produtosAll', $estoque->id) }}"
                                                    class="btn btn-primary btn-sm me-4">
                                                    Ver Produtos
                                                </a>

                                                <a class="btn btn-primary btn-sm me-4"
                                                    id="botaoAtualizar{{ $estoque->id }}"
                                                    onclick="Atualizar({{ $estoque->id }})">
                                                    Atualizar Estoque
                                                </a>

                                                <button id="botaoSalvar{{ $estoque->id }}"
                                                    class="btn btn-primary me-4" type="submit" disabled>Salvar
                                                </button>
                                            </td>

                                        </form>
                                        <td>
                                            <form action="{{ route('cadastros.estoques-deletar', $estoque->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm excluir-btn"
                                                    data-categoria="{{ $estoque->titulo }}" type="submit">
                                                    Excluir Estoque
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>

                    <div class="text-center mt-3">
                        <input type="text" class="form-control" id="searchInput" placeholder="Pesquisar">
                        <a id="exportButton" href="#" class="btn btn-success mt-3">Exportar para Excel</a>
                    </div>

                </div>
            </div>

            <!-- Scripts JavaScript -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>

            <script>
                // script de atualizacao tabela        
                const botaoAtualizar = document.getElementById('botaoAtualizar' + {{ $estoque->id }})

                function Atualizar(id) {
                    const tituloEstoque = document.getElementById('tituloEstoque' + id);
                    const descricaoEstoque = document.getElementById('descricaoEstoque' + id);
                    const fornecedorEstoque = document.getElementById('fornecedorEstoque' + id)
                    const botaoSalvar = document.getElementById('botaoSalvar' + id);

                    console.log('passou')
                    console.log(botaoSalvar)

                    if (tituloEstoque.readOnly && descricaoEstoque.readOnly) {
                        // Se o <textarea> estiver somente leitura, habilita ambos os campos
                        tituloEstoque.removeAttribute('readonly');
                        descricaoEstoque.removeAttribute('readonly');
                        fornecedorEstoque.removeAttribute('readonly')

                        botaoSalvar.removeAttribute('disabled');
                    } else {
                        // Caso contrário, desabilita ambos os campos
                        tituloEstoque.setAttribute('readonly', 'readonly');
                        descricaoEstoque.setAttribute('readonly', 'readonly');
                        fornecedorEstoque.setAttribute('readonly', 'readonly')

                        botaoSalvar.setAttribute('disabled', 'disabled');
                    }
                }
                botaoAtualizar.addEventListener("click", Atualizar)






                function aoAlterarCampoPesquisa() {
                    const textoPesquisa = this.value.toLowerCase();
                    const linhas = document.querySelectorAll('tbody > tr');

                    linhas.forEach(function(linha) {
                        const textoLinha = linha.innerText.toLowerCase();
                        linha.style.display = textoLinha.includes(textoPesquisa) ? 'table-row' : 'none';
                    });
                }

                function aoClicarExportar() {
                    const tabela = document.getElementById("categoriesTable");
                    const wb = XLSX.utils.table_to_book(tabela, {
                        sheet: "Categorias"
                    });
                    const wbout = XLSX.write(wb, {
                        bookType: "xlsx",
                        type: "array"
                    });
                    saveAs(new Blob([wbout], {
                        type: "application/octet-stream"
                    }), "categorias.xlsx");
                }



                document.addEventListener('DOMContentLoaded', function() {
                    const botoesExcluir = document.querySelectorAll('.excluir-btn');
                    const campoPesquisa = document.getElementById('searchInput');
                    const botaoExportar = document.getElementById('exportButton');

                    botoesExcluir.forEach(function(botao) {
                        botao.addEventListener('click', aoClicarExcluir);
                    });

                    campoPesquisa.addEventListener('keyup', aoAlterarCampoPesquisa);
                    botaoExportar.addEventListener('click', aoClicarExportar);

                    verificarNumeroLinhas();
                });
            </script>
        @endif
    </div>
</main>
