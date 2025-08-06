<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostCardComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public $imageUrl;
    public $title;
    public $publishDate;
    public $slug;
    public function __construct($imageUrl, $title, $publishDate, $slug)
    {
      $this->imageUrl=$imageUrl;
      $this->title=$title;
      $this->publishDate=$publishDate;
      $this->slug=$slug;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post-card-component');
    }
}
