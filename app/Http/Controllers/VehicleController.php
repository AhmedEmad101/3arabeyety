<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return Vehicle::all();
    }

    public function search(Request $request,$Model_ID,$Tank_ID,$Owner_ID,$Transimision_ID,$Type_ID,$Motor_ID,$Color_ID,$Condition_ID)
    {

        $vehicle = Vehicle::where('id', '1')
        ->when($request->PropertyType, function($query) {
            $query->where('Model_ID', request()->Model_ID);
        })
        ->when($request->Tank_ID, function($query) {
            $query->where('Tank_ID',request()->Tank_ID);
        })
        ->when($request->Owner_ID, function($query) {
            $query->where('Owner_ID', request()->Owner_ID);
        })
        ->when($request->Transimision_ID, function($query) {
            $query->Where('Transimision_ID',request()->Transimision_ID);
        })->
        when($request->Type_ID, function($query) {
            $query->Where('Type_ID',request()->Type_ID);
        })->when($request->Motor_ID, function($query) {
            $Motor_ID = request()->Motor_ID;
            $query->Where('Motor_ID',request()->Motor_ID);

        })
        //sa7e7a->orderBy('created_at','desc')
        ->paginate(5);
    }
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
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        //
    }
}
