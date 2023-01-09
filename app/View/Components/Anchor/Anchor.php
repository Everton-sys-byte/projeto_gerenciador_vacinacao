<?php

namespace App\View\Components\Anchor;

use Illuminate\View\Component;

class Anchor extends Component
{
    public $route;
    public $type;
    public $svg;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $type, $svg)
    {
        $this->route = $route;
        $this->type = $type;
        $this->svg = $svg;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.anchor.anchor');
    }
}
