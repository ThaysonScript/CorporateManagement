<?php

namespace App\View\Components\Cadastros;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Categorias extends Component
{
    public $estoques;
    public $categorias;
    /**
     * Create a new component instance.
     */
    public function __construct($estoques = '', $categorias = '')
    {
        $this->estoques = $estoques;
        $this->categorias = $categorias;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cadastros.categorias');
    }
}
