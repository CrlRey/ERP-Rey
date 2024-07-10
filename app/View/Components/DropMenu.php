<?php

namespace App\View\Components;

use App\Models\Department;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DropMenu extends Component
{
    /**
     * Create a new component instance.
     */
    public $options;
    public function __construct(Department $department)
    {
        //
        $this->options = $department->all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        return view('components.drop-menu');
    }
}
