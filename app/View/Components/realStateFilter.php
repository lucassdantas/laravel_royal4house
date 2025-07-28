<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class realStateFilter extends Component
{
    public $filtersToShow;
    public function __construct($filtersToShow = '')
    {
        $this->$filtersToShow = $filtersToShow;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.real-state-filter');
    }
}
