<?php

namespace App\View\Components\forms\parts;

use Illuminate\View\Component;

class slabOnGround extends Component
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
        return view('components.forms.parts.slab-on-ground');
    }
}
