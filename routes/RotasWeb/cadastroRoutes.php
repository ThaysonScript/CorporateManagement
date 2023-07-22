<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cadastros\Estoque\EstoqueController;
use App\Http\Controllers\Cadastros\Categoria\CategoriaController;
use App\Http\Controllers\Cadastros\Produto\ProdutoController;

Route::middleware('autenticado')->group(function() {
    Route::get('/home/cadastro/estoque', [EstoqueController::class, 'EstoquesCreate'])->name('cadastros.estoques');
    Route::post('/home/cadastrando/estoque', [EstoqueController::class, 'EstoquesStore'])->name('cadastros.estoques-store');


    Route::get('/home/estoque-{id}/categorias', [CategoriaController::class, 'CategoriaIndex'])->name('site.mostrar.categorias');
    Route::get('/home/cadastro/categoria', [CategoriaController::class, 'CategoriaCreate'])->name('cadastros.categorias');
    Route::post('/home/cadastrando/categoria', [CategoriaController::class, 'CategoriaStore'])->name('cadastros.categorias-store');
    route::put('/home/atualizando/categoria-{id}', [CategoriaController::class, 'CategoriaUpdate'])->name('cadastros.categorias.update');

    route::get('/home/categoria-{item}/produtos', [ProdutoController::class, 'Index'])->name('site.mostrar.produtosAll');
    Route::get('/home/cadastro/produto', [ProdutoController::class, 'ProdutoCreate'])->name('cadastros.produtos');
    Route::post('/home/cadastrando/produto', [ProdutoController::class, 'ProdutoStore'])->name('cadastros.produtos-store');
    Route::get('/home/produtos-de-{item}', [ProdutoController::class, 'ProdutosShow'])->name('site.mostrar.produtos');
});
