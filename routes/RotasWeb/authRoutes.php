<?php

use App\Http\Controllers\Auth\Login\LoginController;
use App\Http\Controllers\Auth\Login\LogoutController;
use App\Http\Controllers\Auth\Registro\RegistroController;
use App\Http\Controllers\Auth\Socialite\SocialiteController;
use Illuminate\Support\Facades\Route;

Route::get('cadastro/login', [LoginController::class, 'LoginCreate'])->name('auth.login');
Route::post('cadastro/entrando/usuario', [LoginController::class, 'LoginEntrar'])->name('auth.login-entrar');
Route::get('cadastro/logout', [LogoutController::class, 'Logout'])->name('auth.logout');

Route::get('cadastro/registro', [RegistroController::class, 'RegistroCreate'])->name('auth.registro');
Route::post('cadastro/registrando/usuario', [RegistroController::class, 'RegistroStore'])->name('auth.registro-store');

Route::get('/entrando/google', [SocialiteController::class, 'RedirecionarProvedor'])->name('auth.socialite.redirecionar');
Route::get('/entrando/google/autenticando', [SocialiteController::class, 'RetornoProvedor'])->name('auth.socialite.retorno');