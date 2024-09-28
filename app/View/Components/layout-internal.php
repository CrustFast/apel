<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LayoutInternal extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // Constructor logic (if needed) can be placed here.
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout-internal');
    }
}
