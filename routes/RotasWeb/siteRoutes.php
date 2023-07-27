<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\PaginaGeral\PaginaGeralController;

Route::get('/', [PaginaGeralController::class, 'PaginaIndex'])->name('site.inicialPage');

Route::get('/home', [PaginaGeralController::class, 'PaginaHomeIndex'])->middleware('autenticado')->name('site.home');

Route::get('/aplicativo', [PaginaGeralController::class, 'Aplicativo'])->name('site.aplicativo');