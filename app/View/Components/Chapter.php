<?php

namespace App\View\Components;

use Illuminate\View\Component;

use App\Models\Story;

class Chapter extends Component
{
    public $chapter;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->chapter = Chapter::get
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.chapter');
    }
}
