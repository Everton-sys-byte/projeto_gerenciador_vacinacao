<?php

namespace App\View\Components\Input;

use Illuminate\View\Component;

class Select extends Component
{
    public $labelName;
    public $inputName;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($labelName=null, $inputName)
    {
        $this->labelName = $labelName;
        $this->inputName = $inputName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input.select');
    }
}
