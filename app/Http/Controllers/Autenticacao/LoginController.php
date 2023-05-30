<?php

namespace App\Http\Controllers\Autenticacao;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Index()
    {
        return view('autenticacao.login');
    }
}
