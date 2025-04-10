<?php

namespace App\View\Components\clients_list;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class column extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $text1,
        public string $text2,
        public string $text3,
        public string $text4,
        public string $text5
        )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.clients_list.column');
    }
}
