<?php

namespace App\View\Components;

use App\Models\Social;
use Illuminate\View\Component;

class SocialsComp extends Component
{
    public $socials;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->socials = Social::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.socials-comp');
    }
}