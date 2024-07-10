<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Department;
use App\Models\Register;

class EditCollection extends Component
{
    public $options;


    public $name;
    public $email;
    public $department;
    public $rol;
    public $phone;
    public $nif;
    public $create_date;


    protected $rules = [
        'name' => 'required|string',
        'email' => 'required|email',
        'rol' => 'required|string',
        'nif' => 'required|max:13',
        'department' => 'required',
        'phone' => 'required',
        'create_date' => 'required'
    ];


    public function mount(Register $register)
    {
        $this->name = $register->nombre;
        $this->email = $register->email;
        $this->department = $register->department_id;
        $this->rol = $register->rol;
        $this->phone = $register->telefono;
        $this->nif = $register->nif;
        $this->create_date = $register->fecha_alta;
    }

    public function editCollection()
    {
        $validated = $this->validate();
        //Search
        $register = Register::where('nif', $this->nif)->firstOrFail();

        //
        $register->update([
            'nombre' => $this->name,
            'email' => $this->email,
            'department_id' => $this->department,
            'rol' => $this->rol,
            'telefono' => $this->phone,
            'fecha_alta' => $this->create_date
        ]);

        session()->flash('message', 'Registro actualizado correctamente');

        return redirect()->route('dashboard');
    }

    public function render()
    {
        $this->options = Department::all();
        return view('livewire.edit-collection');
    }
}
