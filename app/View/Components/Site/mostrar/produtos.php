<?php

namespace App\View\Components\site\mostrar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class produtos extends Component
{
    public $produtos;
    public $categorias;
    /**
     * Create a new component instance.
     */
    public function __construct($produtos, $categorias)
    {
        $this->produtos = $produtos;
        $this->categorias = $categorias;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.site.mostrar.produtos');
    }
}
