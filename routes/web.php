<?php

use App\Http\Controllers\Autenticacao\RegistroController;
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
Route::get('/', [RegistroController::class, 'Index'])->name('autenticacao.registro');
Route::post('/registro', [RegistroController::class, 'RegistrarUsuario'])->name('autenticacao.registrarUsuario');








//-----------------------------------SITE----------------------------------------------//
Route::get('/home', function(){
    return view('site.home');
})->name('site.home');
