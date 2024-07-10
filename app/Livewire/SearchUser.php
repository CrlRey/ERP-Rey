<?php

namespace App\Livewire;

use Livewire\Component;
use App\getRegisterData;
use App\Models\Register;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;

class SearchUser extends Component
{

    #[Validate('required')]
    public $nif_search;
    public $data;

    public function search()
    {
        $validate = $this->validate();

        $this->data =  Register::leftJoin('departments', 'registers.department_id', '=', 'departments.id')->select('registers.id', 'nombre', 'rol', 'email', 'telefono', 'nif', 'departments.department as department_name')->where('nif', '=', $this->nif_search)->limit(5)->get();
    }

    public function mount()
    {
       $this->data = DB::table('registers')->leftJoin('departments', 'registers.department_id', '=', 'departments.id')->select('registers.id', 'nombre', 'rol', 'email', 'telefono', 'nif', 'departments.department as department_name')->limit(5)->get();
    }

    #[On('eliminarRegistro')]
    public function eliminarRegistro(Register $register)
    {
        //$register->delete();
        dd($register->nombre);
    }


    public function render()
    {

        return view('livewire.search-user');
    }
}
