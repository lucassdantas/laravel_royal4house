<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Section extends Component
{
    public $class;
    public $wrapperClass;
    public function __construct($class = '', $wrapperClass = '')
    {
        $this->class = $class;
        $this->wrapperClass = $wrapperClass;
    }

    public function render(): View|Closure|string
    {
        return view('components.section');
    }
}
