<?php

namespace App\View\Components\Card;

use Illuminate\View\Component;

class Card extends Component
{
    public $cardType;
    public $cardTitle;
    public $cardSubTitle;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cardType, $cardTitle, $cardSubTitle)
    {
        $this->cardType = $cardType;
        $this->cardTitle = $cardTitle;
        $this->cardSubTitle = $cardSubTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card.card');
    }
}
