<?php

namespace App\View\Components\Card;

use Illuminate\View\Component;

class Card extends Component
{
    public $cardId;
    public $cardType;
    public $cardSubTitle;
    public $cardInformation;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cardId, $cardType, $cardSubTitle, $cardInformation)
    {
        $this->cardId = $cardId;
        $this->cardType = $cardType;
        $this->cardSubTitle = $cardSubTitle;
        $this->cardInformation = $cardInformation;
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
