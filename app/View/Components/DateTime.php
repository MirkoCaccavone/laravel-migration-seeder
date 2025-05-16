<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Carbon\Carbon;

class DateTime extends Component
{
    public $currentDate;
    public $currentTime;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $now = Carbon::now('Europe/Rome');
        $this->currentDate = $now->format('d/m/Y');
        $this->currentTime = $now->format('H:i:s');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.date-time');
    }
}
