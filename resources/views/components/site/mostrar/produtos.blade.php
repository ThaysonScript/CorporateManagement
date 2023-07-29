<main class="hero">
    <div class="container-fluid text-center">

        @if ($produtos->count() === 0)
            <p class="lead">Sem Produtos</p>
            <a href="{{ route('cadastros.produtos') }}" class="btn btn-primary btn-lg">
                Click para Cadastrar um Produto
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

            <h1 class="text-center">Produtos da Categoria de {{ $categorias->tituloCategoria }}</h1>
            <div class="table-container">
                <div class="container-fluid">
                    <div class="table-responsive">

                        <table id="categoriesTable" class="table table-hover table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Título</th>
                                    <th scope="col" class="w-50">Descrição</th>
                                    <th scope="col">Opções</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($produtos as $produto)
                                    <tr>
                                        <td>{{ $produto->id }}</td>

                                        <form action="{{ route('atualizar.produto', [$produto->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('PUT')

                                            <td class="text-center">

                                                <input type="text" name="tituloProduto"
                                                    value="{{ $produto->tituloProduto }}"
                                                    id="tituloProduto{{ $produto->id }}" class="me-4" readonly>
                                            </td>

                                            <td class="text-center">

                                                <textarea name="descricaoProduto" id="descricaoProduto{{ $produto->id }}" cols="80" rows="2" readonly>
                                                    {{ $produto->descricaoProduto }}
                                                </textarea>
                                            </td>

                                            <td class="d-flex justify-content-end">

                                                <a href="{{ route('site.home') }}" class="btn btn-primary btn-sm me-4">
                                                    Ver Estoques
                                                    {{-- ver fornecedores talves --}}
                                                </a>

                                                <a class="btn btn-primary btn-sm me-4"
                                                    id="botaoAtualizar{{ $produto->id }}"
                                                    onclick="Atualizar({{ $produto->id }})">
                                                    Atualizar Produto
                                                </a>

                                                <button id="botaoSalvar{{ $produto->id }}"
                                                    class="btn btn-primary me-4" type="submit" disabled>Salvar
                                                </button>
                                            </td>
                                        </form>
                                        <td>
                                            <form action="{{ route('deletar.produto', $produto->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm excluir-btn"
                                                    data-categoria="{{ $produto->tituloProduto }}" type="submit">
                                                    Excluir Produto
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
                const botaoAtualizar = document.getElementById('botaoAtualizar' + {{ $produto->id }})

                function Atualizar(id) {
                    const tituloProduto = document.getElementById('tituloProduto' + id);
                    const descricaoProduto = document.getElementById('descricaoProduto' + id);
                    const botaoSalvar = document.getElementById('botaoSalvar' + id);

                    console.log('passou')
                    console.log(botaoSalvar)

                    if (tituloProduto.readOnly && descricaoProduto.readOnly) {
                        // Se o <textarea> estiver somente leitura, habilita ambos os campos
                        descricaoProduto.removeAttribute('readonly');
                        tituloProduto.removeAttribute('readonly');

                        botaoSalvar.removeAttribute('disabled');
                    } else {
                        // Caso contrário, desabilita ambos os campos
                        descricaoProduto.setAttribute('readonly', 'readonly');
                        tituloProduto.setAttribute('readonly', 'readonly');

                        botaoSalvar.setAttribute('disabled', 'disabled');
                    }
                }
                botaoAtualizar.addEventListener("click", Atualizar)




                function aoClicarExcluir() {
                    const row = this.closest('tr');
                    const categoryName = row.querySelector('td:nth-child(2)').innerText;

                    Swal.fire({
                        title: 'Tem certeza?',
                        text: `Deseja excluir a categoria "${categoryName}"?`,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Sim, excluir!',
                        cancelButtonText: 'Cancelar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            row.remove();
                        }
                    });
                }

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

                function verificarNumeroLinhas() {
                    const tabela = document.getElementById("categoriesTable");
                    const numLinhas = tabela.getElementsByTagName("tr").length;

                    if (numLinhas > 30) {
                        const linkContinuar = document.getElementById("continueLink");
                        linkContinuar.style.display = "block";
                    }
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
