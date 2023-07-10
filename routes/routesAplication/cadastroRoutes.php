<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cadastros\CadastrosController;

Route::middleware('autenticado')->group(function() {
    Route::get('/home/cadastro/estoque', [CadastrosController::class, 'EstoquesCreate'])->name('cadastros.estoques');
    Route::post('/home/cadastrando/estoque', [CadastrosController::class, 'EstoquesStore'])->name('cadastros.estoques-store');

    Route::get('/home/cadastro/categoria', [CadastrosController::class, 'CategoriaCreate'])->name('cadastros.categorias');
    Route::post('/home/cadastrando/categoria', [CadastrosController::class, 'CategoriaStore'])->name('cadastros.categorias-store');

    Route::get('/home/cadastro/produto', [CadastrosController::class, 'ProdutoCreate'])->name('cadastros.produtos');
    Route::post('home/cadastrando/produto', [CadastrosController::class, 'ProdutoStore'])->name('cadastros.produtos-store');
});


