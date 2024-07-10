<?php

namespace App\Livewire;

use App\getRegisterData;
use App\Models\Department;
use App\Models\Register;
use App\View\Components\DropMenu;
use Livewire\Component;

class CreateCollection extends Component
{

    public $options;
    public $name;
    public $email;
    public $department;
    public $rol;
    public $phone;
    public $nif;
    public $create_date;
    public $countR = 0;

    protected $rules = [
        'name' => 'required|string',
        'email' => 'required|email',
        'rol' => 'required|string',
        'nif' => 'required|max:13',
        'department' => 'required',
        'phone' => 'required',
        'create_date' => 'required'
    ];

    public function agregarRegistro()
    {
        $this->validate();

        Register::create([
        'nombre' => $this->name,
        'email' => $this->email,
        'department_id' => $this->department,
        'rol' => $this->rol,
        'telefono' => $this->phone,
        'nif' => $this->nif,
        'fecha_alta' => $this->create_date,
        'user_id' => auth()->user()->id
        ]);

        $this->countR++;

        // Crear mensaje
        session()->put('contador', $this->countR);
        session()->flash('message', 'Registro guardado exitosamente.');


        // Redireccionar
        return redirect()->route('dashboard');
    }

    public function mount()
    {

        $this->options = Department::all();
    }


    public function render()
    {

        return view('livewire.create-collection');
    }
}
