<?php

use App\Http\Controllers\Api\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/message', [AuthController::class, 'Resposta'])->name('message');