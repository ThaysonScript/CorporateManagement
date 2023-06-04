<?php

namespace App\Http\Controllers\Site\Visualizar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VerEstoquesController extends Controller
{
    public function VerEstoques()
    {
        return view('site.visualizar.estoques');
    }
}
