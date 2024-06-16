<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use phpDocumentor\Reflection\Types\Boolean;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $label="",
        public string $id="",
        public string $type="text",
        public string $name="",
        public string $value="",
        public bool $link=false,
        public bool $textarea=false,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
