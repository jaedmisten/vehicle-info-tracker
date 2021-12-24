<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $userId = Auth::user()->id;
        $vehicles = Vehicle::where('user_id', '=', $userId)->get();
        //dd($vehicles);
        return view('vehicles', ['vehicles' => $vehicles]);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicle = Vehicle::where('id', '=', $id)->first();
        return view('vehicle', ['vehicle' => $vehicle]);
    }
}
