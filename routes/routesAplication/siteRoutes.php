<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cadastros\CadastrosController;

Route::get('/', [CadastrosController::class, 'PaginaIndex'])->name('site.inicialPage');

Route::middleware('autenticado')->group(function () {
    Route::get('/home', [CadastrosController::class, 'PaginaHomeIndex'])->name('site.home');

    Route::get('home/estoque-de-{estoque}', [CadastrosController::class, 'EstoquesShow'])->name('site.mostrar.estoques');
    Route::get('home/categoria-de-{item}', [CadastrosController::class, 'VerCategoriaProduto'])->name('site.mostrar.categoriaProduto');
    Route::get('home/produtos-de-{item}', [CadastrosController::class, 'VerProdutos'])->name('site.mostrar.produtos');
});

