<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class FormControl extends Component
{
    public $labelName;
    public $inputName;
    public $inputType;
    public $inputValue;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($labelName, $inputName, $inputType, $inputValue)
    {
        $this->labelName = $labelName;
        $this->inputName = $inputName;
        $this->inputType = $inputType;
        $this->inputValue = $inputValue;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.form-group');
    }
}
