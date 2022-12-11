<?php

namespace App\View\Components\Layouts;

use Illuminate\View\Component;

class App extends Component
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
        $user = \Auth::user();
        return view('components.layouts.app', compact('user'));
    }
}
