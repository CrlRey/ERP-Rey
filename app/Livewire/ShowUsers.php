<?php

namespace App\Livewire;

use App\Models\Register;
use Livewire\Component;

class ShowUsers extends Component
{

    public $table;

    public function render()
    {
        $datos = Register::where('user_id', auth()->user()->id)->paginate(10);
        return view('livewire.show-users', ['datos' => $datos]);
    }
}
