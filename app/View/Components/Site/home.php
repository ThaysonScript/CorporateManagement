<?php

namespace App\View\Components\Site;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class home extends Component
{
    public $estoques;

    /**
     * Create a new component instance.
     */
    public function __construct($estoques)
    {
        $this->estoques = $estoques;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.site.home');
    }
}
