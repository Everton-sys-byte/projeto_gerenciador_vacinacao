<?php

namespace App\View\Components\horizonatalNavBar;

use Illuminate\View\Component;

class HorizontalNavBar extends Component
{
    public $items;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.horizonatal-nav-bar.horizontal-nav-bar');
    }
}
