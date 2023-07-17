<?php

namespace App\View\Components\site\mostrar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class categorias extends Component
{
    public $categorias;
    /**
     * Create a new component instance.
     */
    public function __construct($categorias)
    {
        $this->categorias = $categorias;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.site.mostrar.categorias');
    }
}
