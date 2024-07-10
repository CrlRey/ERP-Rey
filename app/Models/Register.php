<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'email',
        'department_id',
        'rol',
        'telefono',
        'nif',
        'fecha_alta',
        'user_id'
    ];
}
