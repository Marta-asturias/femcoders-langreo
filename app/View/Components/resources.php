<?php

namespace App\View\Components;

use Illuminate\View\Component;

class resources extends Component
{
  public $resources;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($resources)
    {
      $this->resources =$resources;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.resources');
    }
}
