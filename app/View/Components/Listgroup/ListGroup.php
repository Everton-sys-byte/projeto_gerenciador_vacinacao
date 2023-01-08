<?php

namespace App\View\Components\Listgroup;

use Illuminate\View\Component;

class ListGroup extends Component
{
    public $type;
    public $itens;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $itens)
    {
        $this->type= $type;
        $this->itens = $itens;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.listgroup.list-group');
    }
}
