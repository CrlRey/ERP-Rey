<?php

namespace App\Http\Controllers;

use App\getRegisterData;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        //$table = getRegisterData::getAllData();
        //$nif = $request->nif;
        //$registers = DB::table('registers')->leftJoin('departments', 'registers.department_id', '=', 'departments.id')->select('registers.id', 'nombre', 'rol', 'email', 'nif', 'departments.department as department_name')->where('nif', '=', $nif)->get();

        //dd($nif);
      //['registers' => $registers]

        return view('/gestion/gestion');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Register $register)
    {
        //


        return view('/gestion/edit', ['register' => $register]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function search(Request $request)
    {

    }
}
