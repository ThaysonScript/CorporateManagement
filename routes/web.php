<?php

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
require __DIR__ . '/RotasWeb/authRoutes.php';


//-----------------------------------SITE_HOME----------------------------------------------//
require __DIR__ . '/RotasWeb/siteRoutes.php';


//-----------------------------------CADASTRO_ITEMS_ESTOQUES----------------------------------------------//
require __DIR__ . '/RotasWeb/cadastroRoutes.php';
