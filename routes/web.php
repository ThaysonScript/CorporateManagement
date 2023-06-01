<?php

use App\Http\Controllers\Autenticacao\RegistroController;
use App\Http\Controllers\Autenticacao\LoginController;
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
