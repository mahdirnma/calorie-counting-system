<?php

namespace App\Http\Controllers;

use App\Models\Period;
use App\Http\Requests\StorePeriodRequest;
use App\Http\Requests\UpdatePeriodRequest;
use Illuminate\Support\Facades\Auth;

class PeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=Auth::user();
        $periods=$user->periods;
        return view('periods.index',compact('periods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('periods.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePeriodRequest $request)
    {
        $user=Auth::user();
        $start_date=date("Y-m-d");
        $period=$user->periods()->create([
            ...$request->validated(),
            'start_date'=>$start_date,
        ]);
        $periods=$user->periods;
        if($period){
            return redirect()->route('periods.index',compact('periods'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Period $period)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Period $period)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePeriodRequest $request, Period $period)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Period $period)
    {
        //
    }
}
