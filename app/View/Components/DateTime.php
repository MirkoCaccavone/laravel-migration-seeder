<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
// libreria PHP per la gestione delle date e del tempo
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
        // impostiamo la data corrente usando Carbon
        $now = Carbon::now('Europe/Rome');
        // Formattiamo la data nel formato italiano (giorno/mese/anno)
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
