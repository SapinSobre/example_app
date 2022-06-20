<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Test extends Component
{
    /**
     * @var string
     */
    public $nickname;

    /**
     * Create a new component instance.
     * 
     * @param string $nickname
     * @return void
     */
    public function __construct($nickname)
    {
        $this->nickname = $nickname;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.test');
    }
}
