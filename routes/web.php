<?php

use App\Http\Controllers\Autenticacao\AutenticacaoController;
use App\Http\Controllers\Cadastros\CadastrosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//-----------------------------------AUTENTICACAO----------------------------------------------//
Route::get('/registro', [AutenticacaoController::class, 'RegistroCreate'])->name('auth.registro');
Route::post('/registrando-usuario', [AutenticacaoController::class, 'RegistroStore'])->name('auth.registro-store');
Route::get('/login', [AutenticacaoController::class, 'LoginCreate'])->name('auth.login');
Route::post('/logando', [AutenticacaoController::class, 'LoginEntrar'])->name('auth.login-entrar');
Route::get('/logout', [AutenticacaoController::class, 'Logout'])->name('auth.logout');


//-----------------------------------SITE_HOME----------------------------------------------//
Route::get('/', [CadastrosController::class, 'PaginaIndex'])->name('site.inicialPage');
Route::get('/home', [CadastrosController::class, 'PaginaHomeIndex'])->middleware('autenticado')->name('site.home');

Route::get('/estoque-de-{estoque}', [CadastrosController::class, 'EstoquesShow'])->name('site.mostrar.estoques');
Route::get('/categoria-produto', [CadastrosController::class, 'VerCategoriaProduto'])->name('site.mostrar.categoriaProduto');
Route::get('/produtos', [CadastrosController::class, 'VerProdutos'])->name('site.mostrar.produtos');



//-----------------------------------CADASTRO_ITEMS_ESTOQUES----------------------------------------------//
// cadastroCategoriaEstoque
Route::get('/cadastrar-estoque', [CadastrosController::class, 'EstoquesCreate'])->name('cadastros.estoques');
Route::post('/cadastrando-estoque', [CadastrosController::class, 'EstoquesStore'])->name('cadastros.estoques-store');
Route::get('/cadastrar-categoria-produto', [CadastrosController::class, 'CategoriaCreate'])->name('cadastros.categorias');
Route::post('/cadastrando-categoria-produto', [CadastrosController::class, 'CategoriaStore'])->name('cadastros.categorias-store');
Route::get('/cadastrar-produto', [CadastrosController::class, 'ProdutoCreate'])->name('cadastros.produtos');
Route::post('/cadastrando-produto', [CadastrosController::class, 'ProdutoStore'])->name('cadastros.produtos-store');
