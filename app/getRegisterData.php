<?php

namespace App;

use App\Models\Register;
use App\Models\Department;
use Illuminate\Support\Facades\DB;

class getRegisterData
{
    /**
     * Create a new class instance.
     */

    public function __construct()
    {
        //
    }

    public static function countRegister($countV = 0)
    {
        $countV+=1;
    }

    public static function countDepartment()
    {
        return Register::select('departments.id as department_id', 'departments.department', DB::raw('COUNT(registers.id) AS total'))
        ->leftJoin('departments', 'registers.department_id', '=', 'departments.id')
        ->groupBy('departments.id', 'departments.department')
        ->get();



    }

    public static function getUserData()
    {
        return DB::table('registers')->leftJoin('departments', 'registers.department_id', '=', 'departments.id')->select('registers.id', 'nombre', 'rol', 'email', 'nif', 'departments.department as department_name')->orderByDesc('registers.id')->limit(7)->get();
    }

    public static function getAllData()
    {
        return DB::table('registers')->leftJoin('departments', 'registers.department_id', '=', 'departments.id')->select('registers.id', 'nombre', 'rol', 'email', 'nif', 'departments.department as department_name')->get();
    }

    public static function mostDepartment()
    {
        $mostFrequentDepartment = Register::select('department_id', DB::raw('count(*) as total'))
        ->groupBy('department_id')
        ->orderBy('total', 'desc')
        ->first();

        if ($mostFrequentDepartment) {
            return Department::find($mostFrequentDepartment->department_id);

        }


    }
}
