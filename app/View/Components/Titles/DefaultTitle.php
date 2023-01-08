<?php

namespace App\View\Components\Titles;

use Illuminate\View\Component;

class DefaultTitle extends Component
{

    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title)
    {
        //
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.titles.default-title');
    }
}
