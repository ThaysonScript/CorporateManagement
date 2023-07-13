<?php

namespace App\View\Components\layouts\menus;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class navegacao extends Component
{
    public $usuarioLogado;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->usuarioLogado = Auth::user()->name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layouts.menus.navegacao');
    }
}
