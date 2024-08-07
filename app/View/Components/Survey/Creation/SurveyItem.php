<?php

namespace App\View\Components\Survey\Creation;

use App\Models\Survey\Item;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SurveyItem extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public Item $surveyItem,
        public int $number
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.survey.creation.survey-item');
    }
}
