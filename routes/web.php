<?php

use App\Http\Controllers\Autenticacao\AutenticacaoController;
use App\Http\Controllers\Cadastros\CadastrosController;
use App\Http\Controllers\Site\SiteController;
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
Route::get('/registro', [AutenticacaoController::class, 'Registro'])->name('autenticacao.registro');
Route::post('/registrando-usuario', [AutenticacaoController::class, 'RegistrandoUsuario'])->name('autenticacao.registrando-Usuario');
Route::get('/login', [AutenticacaoController::class, 'Login'])->name('autenticacao.login');
Route::post('/logando', [AutenticacaoController::class, 'Logando'])->name('autenticacao.logando');
Route::get('/logout', [AutenticacaoController::class, 'Logout'])->name('autenticacao.logout');



//-----------------------------------SITE_HOME----------------------------------------------//
Route::get('/', [SiteController::class, 'PaginaIndex'])->name('site.inicialPage');
Route::get('/home', [SiteController::class, 'PaginaHomeIndex'])->middleware('autenticado')->name('site.home');

Route::get('/estoques-cadastrados', [SiteController::class, 'VerEstoques'])->name('site.visualizar.estoques');
Route::get('/categoria-produto', [SiteController::class, 'VerCategoriaProduto'])->name('site.visualizar.categoriaProduto');
Route::get('/produtos', [SiteController::class, 'VerProdutos'])->name('site.visualizar.produtos');


//-----------------------------------CADASTRO_ITEMS_ESTOQUES----------------------------------------------//
// cadastroCategoriaEstoque
Route::get('/cadastrar-estoque', [CadastrosController::class, 'EstoquesIndex'])->name('cadastroEstoques.categoriaEstoque');
Route::post('/cadastrando-estoque', [CadastrosController::class, 'EstoquesCreate'])->name('cadastroEstoques.cadastrandoEstoque');

// cadastroCategoriaProduto
Route::get('/cadastrar-categoria-produto', [CadastrosController::class, 'CategoriaProdutoIndex'])->name('cadastroEstoques.categoriaProduto');
Route::post('/cadastrando-categoria-produto', [CadastrosController::class, 'CategoriaProdutoCreate'])->name('cadastroEstoques.cadastrandoCategoriaProduto');

// cadastroProduto
Route::get('/cadastrar-produto', [CadastrosController::class, 'ProdutoIndex'])->name('cadastroEstoques.produto');
Route::post('/cadastrando-produto', [CadastrosController::class, 'ProdutoCreate'])->name('cadastroEstoques.cadastrandoProduto');
