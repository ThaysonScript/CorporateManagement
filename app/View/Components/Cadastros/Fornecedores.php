<?php

namespace App\View\Components\Cadastros;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Fornecedores extends Component
{
    public $estoques;
    public $categorias;
    public $produtos;
    /**
     * Create a new component instance.
     */
    public function __construct($estoques, $categorias, $produtos)
    {
        $this->estoques = $estoques;
        $this->categorias = $categorias;
        $this->produtos = $produtos;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cadastros.fornecedores');
    }
}
