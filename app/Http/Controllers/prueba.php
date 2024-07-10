<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class prueba extends Controller
{
    //

    public function index(Request $request)
    {
        $nif = $request->nif;
        $registers = DB::table('registers')->leftJoin('departments', 'registers.department_id', '=', 'departments.id')->select('registers.id', 'nombre', 'rol', 'email', 'nif', 'departments.department as department_name')->where('nif', '=', $nif)->get();

       // dd($nif);
    }
}
