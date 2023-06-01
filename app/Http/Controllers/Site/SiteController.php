<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function PaginaInicial()
    {
        return view('site.inicialPage');
    }

    public function PaginaHome()
    {
        return view('site.home');
    }
}
