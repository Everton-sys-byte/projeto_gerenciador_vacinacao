<?php

namespace App\View\Components\Modal;

use Illuminate\View\Component;

class Modal extends Component
{

    public $modalId;
    public $modalTitle;
    public $modalType;
    public $modalFormId;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($modalId,$modalTitle,$modalType,$modalFormId)
    {
        $this->modalId = $modalId;
        $this->modalTitle = $modalTitle;
        $this->modalType = $modalType;
        $this->modalFormId = $modalFormId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal.modal');
    }
}
