<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class DefaultForm extends Component
{
    public $formAction;
    public $formMethod;
    public $formEncType;
    /**
     * Create a new component instance.
     *
     * @return void 
     */
    public function __construct($formAction, $formMethod, $formEncType = false)
    {
        $this->formAction = $formAction;
        $this->formMethod = $formMethod;
        $this->formEncType = $formEncType;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.default-form');
    }
}
