<?php

namespace App\View\Components\forms\misc;

use Illuminate\View\Component;

class reCapchaG extends Component
{
    public $gKey;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($gKey = 'thisIsKey')
    {
       $this->gKey = $gKey = env('RECAPCHA_SITE_KEY');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.misc.re-capcha-g');
    }
}
