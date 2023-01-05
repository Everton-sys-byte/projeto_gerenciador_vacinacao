<?php

namespace App\View\Components\Toast;

use Illuminate\View\Component;

class Toast extends Component
{

    public $title;
    public $info; 
    public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $info, $type)
    {
        $this->title = $title;
        $this->info = $info;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.toast.toast');
    }
}
