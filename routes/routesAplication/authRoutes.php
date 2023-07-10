<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Autenticacao\AutenticacaoController;

Route::get('cadastro/registro', [AutenticacaoController::class, 'RegistroCreate'])->name('auth.registro');
Route::post('cadastro/registrando/usuario', [AutenticacaoController::class, 'RegistroStore'])->name('auth.registro-store');
Route::get('cadastro/login', [AutenticacaoController::class, 'LoginCreate'])->name('auth.login');
Route::post('cadastro/entrando/usuario', [AutenticacaoController::class, 'LoginEntrar'])->name('auth.login-entrar');
Route::get('cadastro/logout', [AutenticacaoController::class, 'Logout'])->name('auth.logout');