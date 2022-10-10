<?php

namespace App\View\Components;

use Illuminate\View\Component;

class miniGame extends Component
{
    public $minigames;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($minigames)
    {
        $this->minigames=$minigames;
  }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.mini-game');
    }
}
