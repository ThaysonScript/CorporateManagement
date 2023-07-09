<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cadastros\CadastrosController;

Route::get('/', [CadastrosController::class, 'PaginaIndex'])->name('site.inicialPage');

Route::middleware('autenticado')->group(function () {
    Route::get('/home', [CadastrosController::class, 'PaginaHomeIndex'])->name('site.home');

    Route::get('/estoque-de-{estoque}', [CadastrosController::class, 'EstoquesShow'])->name('site.mostrar.estoques');
    Route::get('/categoria-de-{item}', [CadastrosController::class, 'VerCategoriaProduto'])->name('site.mostrar.categoriaProduto');
    Route::get('/produtos-de-{item}', [CadastrosController::class, 'VerProdutos'])->name('site.mostrar.produtos');
});

