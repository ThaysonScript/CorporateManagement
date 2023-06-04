<?php

use App\Http\Controllers\Autenticacao\RegistroController;
use App\Http\Controllers\Autenticacao\LoginController;
use App\Http\Controllers\CadastroEstoques\CategoriaEstoqueController;
use App\Http\Controllers\CadastroEstoques\CategoriaProdutoController;
use App\Http\Controllers\CadastroEstoques\ProdutoController;
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
Route::get('/registro', [RegistroController::class, 'Index'])->name('autenticacao.registro');
Route::post('/registro', [RegistroController::class, 'RegistrarUsuario'])->name('autenticacao.registrarUsuario');

//login
Route::get('/login', [LoginController::class, 'Index'])->name('autenticacao.login');
Route::post('/login', [LoginController::class, 'LoginEntrando'])->name('autenticacao.loginEntrando');

//loggout
Route::get('/loggout', [LoginController::class, 'Logout'])->name('autenticacao.logout');



//-----------------------------------SITE----------------------------------------------//
// landing page
Route::get('/', [SiteController::class, 'PaginaInicial'])->name('site.inicialPage');

// home page
Route::get('/home', [SiteController::class, 'PaginaHome'])->middleware('autenticado')->name('site.home');




//-----------------------------------CADASTRO_ESTOQUES----------------------------------------------//
// cadastroCategoriaEstoque
Route::get('/Cadastrar-Estoque', [CategoriaEstoqueController::class, 'Index'])->name('cadastroEstoques.categoriaEstoque');
Route::post('/Cadastrando-Estoque', [CategoriaEstoqueController::class, 'CadastrandoCategoriaEstoque'])->name('cadastroEstoques.cadastrandoEstoque');

// cadastroCategoriaProduto
Route::get('/Cadastrar-Categoria-Produto', [CategoriaProdutoController::class, 'Index'])->name('cadastroEstoques.categoriaProduto');
Route::post('/Cadastrar-Categoria-Produto', [CategoriaProdutoController::class, 'CadastrandoCategoriaProduto'])->name('cadastroEstoques.categoriaProduto');

// cadastroProduto
Route::get('/Cadastrar-Produto', [ProdutoController::class, 'Index'])->name('cadastroEstoques.produto');
Route::post('/Cadastrar-Produto', [ProdutoController::class, 'CadastrandoProduto'])->name('cadastroEstoques.produto');