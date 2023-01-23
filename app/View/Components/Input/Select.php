<?php

namespace App\View\Components\Input;

use Illuminate\View\Component;

class Select extends Component
{
    public $labelName;
    public $inputName;
    public $options;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($labelName=null, $inputName, $options)
    {
        $this->labelName = $labelName;
        $this->inputName = $inputName;
        $this->options = $options;
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
