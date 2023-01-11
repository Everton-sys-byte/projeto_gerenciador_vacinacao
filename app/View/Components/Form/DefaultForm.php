<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class DefaultForm extends Component
{
    public $action;
    public $encType;
    public $method;
    /**
     * Create a new component instance.
     *
     * @return void 
     */
    public function __construct($action, $encType = "", $method)
    {
        $this->action = $action;
        $this->encType = $encType;
        $this->method = $method;
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
