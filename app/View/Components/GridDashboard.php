<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;
use Illuminate\Contracts\View\View;

class GridDashboard extends Component
{
    /**
     * Create a new component instance.
     */

    public $register;
    public $department;

    public function __construct($register, $department)
    {
        //
        $this->register = $register;
        $this->department = $department;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.grid-dashboard');
    }
}
