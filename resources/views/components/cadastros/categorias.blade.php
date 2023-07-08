<div class="d-flex justify-content-center text-center">
    <div class="row">
        <h1>Cadastre Uma Categoria</h1>

        <div class="card text-center mb-3">
            <div class="card-body">
                <form action="{{ route('cadastros.categorias-store') }}" method="POST">

                    @csrf
                    <label for="tituloCategoria">Nome da Categoria:</label>
                    <br>
                    <input type="text" name="tituloCategoria" id="tituloCategoria"
                        placeholder="Nome da Categoria">
                    <br><br>

                    <label for="descricaoCategoria">Descrição da Categoria:</label>
                    <br>
                    <textarea name="descricaoCategoria" id="descricaoCategoria" cols="30" rows="10"></textarea>
                    <br><br>

                    <div class="form-group">
                        <select name="estoques_id" id="estoques_id" class="form-control text-center">
                            <label for="estoques_id">Categoria do Estoque:</label>
                            @foreach ($estoques as $estoque)
                                {{-- escolhe o id do estoque pelo nome do estoque e salva no categoria_estoque_id do select que é passado pro controller --}}
                                <option value="{{ $estoque->id }}">{{ $estoque->titulo }}</option>
                            @endforeach
                        </select>
                    </div>

                    <br><br>
                    <button type="submit">Cadastrar a Categoria</button>

                </form>
            </div>
        </div>
    </div>
</div>