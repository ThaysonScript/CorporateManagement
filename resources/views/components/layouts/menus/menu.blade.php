<div>
  <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Enable both scrolling & backdrop</button>
  
  <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <a href="{{ route('site.home') }}" class="btn btn-primary mb-4">Home</a>
      <br>
      <a href="{{ route('cadastros.estoques') }}" class="btn btn-primary mb-4">Cadastrar um Estoque</a>
      <br>
      <a href="{{ route('cadastros.categorias') }}" class="btn btn-primary mb-4">Cadastrar uma Categoria</a>
      <br>
      <a href="{{ route('cadastros.produtos') }}" class="btn btn-primary mb-4">Cadastrar um Produto</a>
      <br>
      <a href="{{ route('auth.logout') }}" class="btn btn-primary">Sair</a>
    </div>
  </div>
</div>