<div class="d-flex justify-content-center text-center">
    <div class="row">
        <h1>Cadastre um Estoque</h1>

        <div class="card text-center mb-3">
            <div class="card-body">
                <form action="{{ route('cadastros.estoques-store') }}" method="POST">

                    @csrf
                    <label for="titulo">Nome do Estoque:</label>
                    <br>
                    <input type="text" name="titulo" id="titulo"
                        placeholder="Nome do Estoque">
                    <br><br>

                    <label for="descricao">Descrição do Estoque:</label>
                    <br>
                    <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
                    <br><br>
                    <button type="submit">Cadastrar Estoque</button>

                </form>
            </div>
        </div>
    </div>
</div>