<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Autenticacao\AutenticacaoController;

Route::get('/registro', [AutenticacaoController::class, 'RegistroCreate'])->name('auth.registro');
Route::post('/registrando-usuario', [AutenticacaoController::class, 'RegistroStore'])->name('auth.registro-store');
Route::get('/login', [AutenticacaoController::class, 'LoginCreate'])->name('auth.login');
Route::post('/logando', [AutenticacaoController::class, 'LoginEntrar'])->name('auth.login-entrar');
Route::get('/logout', [AutenticacaoController::class, 'Logout'])->name('auth.logout');