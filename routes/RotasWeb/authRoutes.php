<?php

use App\Http\Controllers\Auth\Google\GoogleController;
use App\Http\Controllers\Auth\Login\LoginController;
use App\Http\Controllers\Auth\Login\LogoutController;
use App\Http\Controllers\Auth\Registro\RegistroController;
use Illuminate\Support\Facades\Route;

Route::get('cadastro/login', [LoginController::class, 'LoginCreate'])->name('auth.login');
Route::post('cadastro/entrando/usuario', [LoginController::class, 'LoginEntrar'])->name('auth.login-entrar');
Route::get('cadastro/logout', [LogoutController::class, 'Logout'])->name('auth.logout');

Route::get('cadastro/registro', [RegistroController::class, 'RegistroCreate'])->name('auth.registro');
Route::post('cadastro/registrando/usuario', [RegistroController::class, 'RegistroStore'])->name('auth.registro-store');

Route::get('/entrando/google', [GoogleController::class, 'RedirecionarProvedor'])->name('auth.google.redirecionar');
Route::get('/entrando/google/autenticando', [GoogleController::class, 'RetornoProvedor'])->name('auth.google.retorno');