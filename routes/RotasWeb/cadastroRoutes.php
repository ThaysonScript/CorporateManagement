<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cadastros\Estoque\EstoqueController;
use App\Http\Controllers\Cadastros\Categoria\CategoriaController;
use App\Http\Controllers\Cadastros\Fornecedores\FornecedorController;
use App\Http\Controllers\Cadastros\Produto\ProdutoController;

Route::middleware('autenticado')->group(function() {
    Route::get('/home/cadastro/estoque', [EstoqueController::class, 'EstoquesCreate'])->name('cadastros.estoques');
    Route::post('/home/cadastrando/estoque', [EstoqueController::class, 'EstoquesStore'])->name('cadastros.estoques-store');
    Route::put('/home/atualizando-estoque-{id}', [EstoqueController::class, 'EstoquesAtualizar'])->name('cadastros.estoques-atualizar');
    Route::delete('/home/deletando-estoque-{id}', [EstoqueController::class, 'EstoquesDeletar'])->name('cadastros.estoques-deletar');


    Route::get('/home/estoque-{id}/categorias', [CategoriaController::class, 'CategoriaIndex'])->name('site.mostrar.categorias');
    Route::get('/home/cadastro/categoria', [CategoriaController::class, 'CategoriaCreate'])->name('cadastros.categorias');
    Route::post('/home/cadastrando/categoria', [CategoriaController::class, 'CategoriaStore'])->name('cadastros.categorias-store');
    Route::put('/home/atualizando-categoria-{id}', [CategoriaController::class, 'CategoriaUpdate'])->name('cadastros.categorias.update');
    Route::delete('/home/deletando-categoria-{id}', [CategoriaController::class, 'CategoriasDeletar'])->name('cadastros.categorias-deletar');


    route::get('/home/categoria-{id}/produtos', [ProdutoController::class, 'Index'])->name('site.mostrar.produtosAll');
    Route::get('/home/cadastro/produto', [ProdutoController::class, 'ProdutoCreate'])->name('cadastros.produtos');
    Route::post('/home/cadastrando/produto', [ProdutoController::class, 'ProdutoStore'])->name('cadastros.produtos-store');
    Route::get('/home/produtos-de-{id}', [ProdutoController::class, 'ProdutosShow'])->name('site.mostrar.produtos');
    Route::put('/home/atualizando-produto-{id}', [ProdutoController::class, 'ProdutoUpdate'])->name('atualizar.produto');
    Route::delete('/home/deletando-produto-{id}', [ProdutoController::class, 'ProdutoDeletar'])->name('deletar.produto');

    Route::get('/home/cadastro/fornecedores', [FornecedorController::class, 'Index'])->name('cadastros.fornecedores');
    Route::post('/home/cadastrando/fornecedores', [FornecedorController::class, 'FornecedorStore'])->name('cadastros.fornecedores-store');
});
