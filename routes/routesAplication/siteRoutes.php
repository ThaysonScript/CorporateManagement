<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cadastros\CadastrosController;

Route::get('/', [CadastrosController::class, 'PaginaIndex'])->name('site.inicialPage');
Route::get('/home', [CadastrosController::class, 'PaginaHomeIndex'])->middleware('autenticado')->name('site.home');

Route::get('/estoque-de-{estoque}', [CadastrosController::class, 'EstoquesShow'])->name('site.mostrar.estoques');
Route::get('/categoria-produto', [CadastrosController::class, 'VerCategoriaProduto'])->name('site.mostrar.categoriaProduto');
Route::get('/produtos', [CadastrosController::class, 'VerProdutos'])->name('site.mostrar.produtos');
