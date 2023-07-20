{{-- 
<div class="container d-flex justify-content-center text-center column">
    
    @foreach ($produtos as $produto)
    <div class="d-flex justify-content-center text-center">
        <div class="card text-center mb-3">
            <div class="card-body">
                
            </div>
        </div>
    </div>
    @endforeach
</div> --}}























<h1 class="text-center">Produtos da Categoria de {{ $categorias->tituloCategoria }}</h1>
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
                        @foreach ($produtos as $produto)
                        <tr>
                            <td>{{ $produto->id }}</td>
                            <td>{{ $produto->tituloProduto }}</td>
                            <td>{{ $produto->descricaoProduto }}</td>
                            <td class="d-flex justify-content-end">
                                <a class="btn btn-primary btn-sm me-4">Atualizar Produto</a>
                                <button class="btn btn-danger btn-sm excluir-btn" data-categoria="{{ $produto->tituloProduto }}">Excluir Produto</button>
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
        function aoClicarEditavel() {
            this.classList.add('editable');
        }

        function aoPerderFocoEditavel() {
            this.classList.remove('editable');
        }

        function aoClicarExcluir() {
            const row = this.closest('tr');
            const categoryName = row.querySelector('td:nth-child(2)').innerText;

            Swal.fire({
                title: 'Tem certeza?',
                text: `Deseja excluir o produto "${categoryName}"?`,
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
            const celulasEditaveis = document.querySelectorAll('td[contenteditable="true"]');
            const botoesExcluir = document.querySelectorAll('.excluir-btn');
            const campoPesquisa = document.getElementById('searchInput');
            const botaoExportar = document.getElementById('exportButton');

            celulasEditaveis.forEach(function(celula) {
                celula.addEventListener('click', aoClicarEditavel);
                celula.addEventListener('blur', aoPerderFocoEditavel);
            });

            botoesExcluir.forEach(function(botao) {
                botao.addEventListener('click', aoClicarExcluir);
            });

            campoPesquisa.addEventListener('keyup', aoAlterarCampoPesquisa);
            botaoExportar.addEventListener('click', aoClicarExportar);

            verificarNumeroLinhas();
        });
    </script>