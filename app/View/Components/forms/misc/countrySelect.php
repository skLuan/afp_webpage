<?php

namespace App\View\Components\forms\misc;

use Illuminate\View\Component;

class countrySelect extends Component
{
    public $locale;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.misc.country-select');
    }
}
