<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RealStateCard extends Component
{
  public $imageUrl;
  public $title;
  public $neighborhood;
  public $condominium;
  public $type;
  public $rooms;
  public $suites;
  public $parkingSpaces;
  public $area;
  public $price;
  public $code;
  public $moreDetailsUrl;

  public function __construct(
    $imageUrl,
    $title,
    $neighborhood,
    $type,
    $rooms,
    $suites,
    $parkingSpaces,
    $area,
    $price,
    $code,
    $moreDetailsUrl,
    $condominium
  ) {
    $this->imageUrl = $imageUrl;
    $this->title = $title;
    $this->neighborhood = $neighborhood;
    $this->type = $type;
    $this->rooms = $rooms;
    $this->suites = $suites;
    $this->parkingSpaces = $parkingSpaces;
    $this->area = $area;
    $this->price = $price;
    $this->code = $code;
    $this->moreDetailsUrl = $moreDetailsUrl;
    $this->condominium = $condominium;
  }

  /**
   * Get the view / contents that represent the component.
   */
  public function render(): View|Closure|string
  {
    return view('components.real-state-card');
  }
}
