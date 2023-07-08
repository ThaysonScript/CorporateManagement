<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cadastros\CadastrosController;

Route::middleware('autenticado')->group(function() {
    Route::get('/cadastrar-estoque', [CadastrosController::class, 'EstoquesCreate'])->name('cadastros.estoques');
    Route::post('/cadastrando-estoque', [CadastrosController::class, 'EstoquesStore'])->name('cadastros.estoques-store');
    Route::get('/cadastrar-categoria-produto', [CadastrosController::class, 'CategoriaCreate'])->name('cadastros.categorias');
    Route::post('/cadastrando-categoria-produto', [CadastrosController::class, 'CategoriaStore'])->name('cadastros.categorias-store');
    Route::get('/cadastrar-produto', [CadastrosController::class, 'ProdutoCreate'])->name('cadastros.produtos');
    Route::post('/cadastrando-produto', [CadastrosController::class, 'ProdutoStore'])->name('cadastros.produtos-store');
});


