<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NeighborhoodCardComponent extends Component
{
    public  $name;
    public $slug;
    public $imageUrl;
    public function __construct($name, $slug, $imageUrl)
    {
        $this->name = $name; 
        $this->slug = $slug; 
        $this->imageUrl = $imageUrl; 
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.neighborhood-card-component');
    }
}
