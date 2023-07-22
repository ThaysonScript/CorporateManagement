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

                        <td>
                            <form action="{{ route('cadastros.categorias.update', ['categoria', $categoria->id]) }}" method="post">
                                @csrf
                                @method('PUT')
                                <span contenteditable="false" id="tituloCategoria{{ $categoria->id }}" class="me-4">{{ $categoria->tituloCategoria }}</span>
                                <button id="botaoEditarTitulo{{ $categoria->id }}" style="display: none" onclick="acaoDoBotao('tituloCategoria{{ $categoria->id }}', 'botaoEditarTitulo{{ $categoria->id }}')" class="btn btn-primary ml-2" type="submit">Editar</button>
                            </form>
                        </td>

                        <td>
                            <form action="{{ route('cadastros.categorias.update', ['categoria', $categoria->id]) }}" method="post">
                                @csrf
                                @method('PUT')
                                <span contenteditable="false" id="descricaoCategoria{{ $categoria->id }}" class="me-4">{{ $categoria->descricaoCategoria }}</span>
                                <button id="botaoEditarDescricao{{ $categoria->id }}" style="display: none" onclick="acaoDoBotao('descricaoCategoria{{ $categoria->id }}', 'botaoEditarDescricao{{ $categoria->id }}')" class="btn btn-primary ml-2" type="submit">Editar</button>
                            </form>
                        </td>

                        <td class="d-flex justify-content-end">
                            <a href="{{ route('site.mostrar.produtosAll', $categoria->id) }}" class="btn btn-primary btn-sm me-4">Ver Produtos</a>
                            <a class="btn btn-primary btn-sm me-4" onclick="habilitarEdicao('tituloCategoria{{ $categoria->id }}', 'botaoEditarTitulo{{ $categoria->id }}', 'descricaoCategoria{{ $categoria->id }}', 'botaoEditarDescricao{{ $categoria->id }}')">Atualizar Categoria</a>
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
    function exibirBotao(id) {
        var botao = document.getElementById(id);
        botao.style.display = "inline";
    }

    function acaoDoBotao(idElemento, idBotao) {
        var inputElement = document.getElementById(idElemento);
        inputElement.setAttribute("contenteditable", "false");

        var botao = document.getElementById(idBotao);
        botao.style.display = "none";
    }

    function habilitarEdicao(idElementoTitulo, idBotaoTitulo, idElementoDescricao, idBotaoDescricao) {
        var inputElementTitulo = document.getElementById(idElementoTitulo);
        var botaoTitulo = document.getElementById(idBotaoTitulo);

        var inputElementDescricao = document.getElementById(idElementoDescricao);
        var botaoDescricao = document.getElementById(idBotaoDescricao);

        var isEditableTitulo = inputElementTitulo.getAttribute("contenteditable");
        var isEditableDescricao = inputElementDescricao.getAttribute("contenteditable");

        if (isEditableTitulo === "false" && isEditableDescricao === "false") {
            inputElementTitulo.setAttribute("contenteditable", "true");
            inputElementDescricao.setAttribute("contenteditable", "true");

            botaoTitulo.style.display = "inline";
            botaoDescricao.style.display = "inline";
        } else {
            inputElementTitulo.setAttribute("contenteditable", "false");
            inputElementDescricao.setAttribute("contenteditable", "false");

            botaoTitulo.style.display = "none";
            botaoDescricao.style.display = "none";
        }
    }

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
