<?php

namespace App\View\Components\SideBar;

use Illuminate\View\Component;

class SideBar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.side-bar.side-bar');
    }

    public function lists() {
        return [
            [
                'image' => 'image',
                'name' => 'Inicio'
            ],
            [
                'image' => 'image2',
                'name' => 'Vacinas disponíveis'
            ]
        ];
    }
}
