<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class FormControl extends Component
{
    public $labelName;
    public $inputName;
    public $inputType;
    public $inputValue;
    public $inputReadOnly;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($labelName, $inputName, $inputType, $inputValue, $inputReadOnly = null)
    {
        $this->labelName = $labelName;
        $this->inputName = $inputName;
        $this->inputType = $inputType;
        $this->inputValue = $inputValue;
        $this->inputReadOnly = $inputReadOnly;
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
