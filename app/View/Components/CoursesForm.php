<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CoursesForm extends Component
{
    public $workshops;
    /**
     * Create a new component instance.
     *
     * @return void
     */
   
        public function __construct($workshops)
        {
            $this->workshops=$workshops;
      }
    

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.courses-form');
    }
}
