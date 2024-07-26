<?php

namespace App\View\Components\vendor\backpack\ui\components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class dashboard-card extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.vendor.backpack.ui.components.dashboard-card');
    }
}