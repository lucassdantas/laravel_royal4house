<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class realStateCard extends Component
{
  private $imageUrl;
  private $title;
  private $neighborhood;
  private $type;
  private $rooms;
  private $suites;
  private $parkingSpaces;
  private $area;
  private $price;
  private $code;
  private $moreDetailsUrl;

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
    $moreDetailsUrl
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
  }

  /**
   * Get the view / contents that represent the component.
   */
  public function render(): View|Closure|string
  {
    return view('components.real-state-card');
  }
}
