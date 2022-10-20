<?php

namespace App\View\Components;

use Illuminate\View\Component;

class seccionCourses extends Component
{
    public $workshop;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($workshop)
    {
        $this->workshop = $workshop;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.seccion-courses');
    }
}
