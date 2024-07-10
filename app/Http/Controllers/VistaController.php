<?php

namespace App\Http\Controllers;

use App\getRegisterData;
use App\Models\User;
use App\Models\Register;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Charts\DashboardUser;

class VistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user, Register $register, Request $request)
    {
        //Cahrt
    $chart = new DashboardUser;

    $chart->options([
        'tooltip' => [
            'show' => true // or false, depending on what you want.
        ]
    ]);

    $chartDp = getRegisterData::countDepartment();

    //dd($chartDp);
    $labels = [];
    $dataSet = [];

    foreach ($chartDp as $key => $index) {
        $labels[] = $index->department;
        $dataSet[] = $index->total;
    }

    // Lavels
    $chart->labels($labels);
    $chart->minimalist(true);
    $chart->displayLegend(true);
    $chart->dataset('Data1', 'doughnut', $dataSet)->backgroundColor(['#F8BBD0', '#B3E5FC', '#C8E6C9', '#FFF9C4', '#E1BEE7'])->color(['#F8BBD0', '#B3E5FC', '#C8E6C9', '#FFF9C4', '#E1BEE7']);


        //total
    $register = DB::table('registers')->select('nombre')->count();

    $table = getRegisterData::getUserData();
    $department = getRegisterData::mostDepartment();


    //Count
    $countV = session()->get('contador', 0);

        return view('dashboard', ['user' => $user, 'register' => $register, 'department' => $department, 'table' => $table, 'chart' => $chart, 'countV' => $countV]);
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
    public function edit(string $id)
    {
        //
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
}
