<h1 class="text-center">Categorias</h1>
<div class="table-container">
    <div class="container">
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
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td>{{ $categoria->id }}</td>
                            <form action="{{ route('cadastros.categorias.update', [$categoria->id]) }}" method="post">
                                @csrf
                                @method('PUT')
                                <td class="text-center">
                                    {{-- <form action="{{ route('cadastros.categorias.update', [$categoria->id]) }}" method="post">
                                        @csrf
                                        @method('PUT') --}}
                                        <input type="text" name="tituloCategoria" value="{{ $categoria->tituloCategoria }}" id="tituloCategoria{{ $categoria->id }}" class="me-4" readonly>

                                        <button id="botaoSalvarTitulo{{ $categoria->id }}" class="btn btn-primary ml-2 mt-2" type="submit" disabled>Salvar</button>
                                    {{-- </form> --}}
                                </td>

                                <td class="text-center">
                                    {{-- <form action="{{ route('cadastros.categorias.update', [$categoria->id]) }}" method="post">
                                        @csrf
                                        @method('PUT') --}}

                                        <textarea name="descricaoCategoria" id="descricaoCategoria{{ $categoria->id }}" cols="80" rows="2" readonly>
                                            {{ $categoria->descricaoCategoria }}
                                        </textarea>

                                        <button id="botaoSalvarDescricao{{ $categoria->id }}" class="btn btn-primary ml-2 mt-2" type="submit" disabled>Salvar</button>
                                    {{-- </form> --}}
                                </td>
                            </form>

                            <td class="d-flex justify-content-end">

                                <a href="{{ route('site.mostrar.produtosAll', $categoria->id) }}" class="btn btn-primary btn-sm me-4">Ver Produtos</a>

                                <a class="btn btn-primary btn-sm me-4" id="botaoAtualizar{{ $categoria->id }}" onclick="Atualizar({{ $categoria->id }})">
                                    Atualizar Categoria
                                </a>

                                <button class="btn btn-danger btn-sm excluir-btn" data-categoria="{{ $categoria->tituloCategoria }}">Excluir Categoria</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="text-center mt-3">

            <input type="text" class="form-control" id="searchInput" placeholder="Pesquisar">

            <a id="exportButton" href="#" class="btn btn-success mt-3">Exportar para Excel</a>

            <a id="continueLink" href="pagina_continuacao.html" class="btn btn-info mt-3">Continuar</a>

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
    const botaoAtualizar = document.getElementById('botaoAtualizar' + {{ $categoria->id }})

    function Atualizar(id) {
        const tituloCategoria = document.getElementById('tituloCategoria' + id);
        const descricaoCategoria = document.getElementById('descricaoCategoria' + id);
        const botaoSalvarTitulo = document.getElementById('botaoSalvarTitulo' + id);
        const botaoSalvarDescricao = document.getElementById('botaoSalvarDescricao' + id);

        console.log('passou')
        console.log(botaoSalvarTitulo)
        console.log(botaoSalvarDescricao)

        if (tituloCategoria.readOnly && descricaoCategoria.readOnly) {
            // Se o <textarea> estiver somente leitura, habilita ambos os campos
            descricaoCategoria.removeAttribute('readonly');
            tituloCategoria.removeAttribute('readonly');

            botaoSalvarTitulo.removeAttribute('disabled');
            botaoSalvarDescricao.removeAttribute('disabled');
        } else {
            // Caso contrário, desabilita ambos os campos
            descricaoCategoria.setAttribute('readonly', 'readonly');
            tituloCategoria.setAttribute('readonly', 'readonly');

            botaoSalvarTitulo.setAttribute('disabled', 'disabled');
            botaoSalvarDescricao.setAttribute('disabled', 'disabled');
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
