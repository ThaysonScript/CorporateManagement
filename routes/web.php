<?php

// auth
use App\Http\Controllers\Autenticacao\RegistroController;
use App\Http\Controllers\Autenticacao\LoginController;
use App\Http\Controllers\Autenticacao\LogoutController;

// create 
use App\Http\Controllers\CadastroEstoques\CategoriaEstoqueController;
use App\Http\Controllers\CadastroEstoques\CategoriaProdutoController;
use App\Http\Controllers\CadastroEstoques\ProdutoController;

// landing-page, home
use App\Http\Controllers\Site\SiteController;

// site read 
use App\Http\Controllers\Site\Visualizar\VerEstoquesController;
use App\Http\Controllers\Site\Visualizar\VerCategoriaProdutoController;
use App\Http\Controllers\Site\Visualizar\VerProdutoController;

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
// registro
Route::get('/registro', [RegistroController::class, 'Index'])->name('autenticacao.registro');
Route::post('/cadastrando-registro', [RegistroController::class, 'RegistrarUsuario'])->name('autenticacao.registrarUsuario');

//login
Route::get('/login', [LoginController::class, 'Index'])->name('autenticacao.login');
Route::post('/login-entrando', [LoginController::class, 'LoginEntrando'])->name('autenticacao.loginEntrando');

//logout
Route::get('/logout', [LogoutController::class, 'Logout'])->name('autenticacao.logout');



//-----------------------------------SITE_HOME----------------------------------------------//
// landing page
Route::get('/', [SiteController::class, 'PaginaInicial'])->name('site.inicialPage');

// home page
Route::get('/home', [SiteController::class, 'PaginaHome'])->middleware('autenticado')->name('site.home');
// Route::get('/Home-Estoques', [SiteController::class, 'HomeEstoques'])->middleware('autenticado')->name('site.home');



//-----------------------------------SITE_READ----------------------------------------------//
// ver estoques
Route::get('/estoques-cadastrados', [VerEstoquesController::class, 'VerEstoques'])->name('site.visualizar.estoques');

// ver categoriaProdutos
Route::get('/categoria-produto', [VerCategoriaProdutoController::class, 'VerCategoriaProduto'])->name('site.visualizar.categoriaProduto');

// ver produtos
Route::get('/produtos', [VerProdutoController::class, 'VerProdutos'])->name('site.visualizar.produtos');




//-----------------------------------CADASTRO_ITEMS_ESTOQUES----------------------------------------------//
// cadastroCategoriaEstoque
Route::get('/cadastrar-estoque', [CategoriaEstoqueController::class, 'Index'])->name('cadastroEstoques.categoriaEstoque');
Route::post('/cadastrando-estoque', [CategoriaEstoqueController::class, 'CadastrandoCategoriaEstoque'])->name('cadastroEstoques.cadastrandoEstoque');

// cadastroCategoriaProduto
Route::get('/cadastrar-categoria-produto', [CategoriaProdutoController::class, 'Index'])->name('cadastroEstoques.categoriaProduto');
Route::post('/cadastrando-categoria-produto', [CategoriaProdutoController::class, 'CadastrandoCategoriaProduto'])->name('cadastroEstoques.cadastrandoCategoriaProduto');

// cadastroProduto
Route::get('/cadastrar-produto', [ProdutoController::class, 'Index'])->name('cadastroEstoques.produto');
Route::post('/cadastrando-produto', [ProdutoController::class, 'CadastrandoProduto'])->name('cadastroEstoques.cadastrandoProduto');