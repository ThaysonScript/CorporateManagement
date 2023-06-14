<?php

namespace App\View\Components\Site;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{
    public $tituloPagina;
    /**
     * Create a new component instance.
     */
    public function __construct($tituloPagina)
    {
        $this->tituloPagina = $tituloPagina;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layouts.layout');
    }
}
