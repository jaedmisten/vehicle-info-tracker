<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Event;
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
        $vehicle = Vehicle::find($id);
        return view('vehicle', ['vehicle' => $vehicle]);        
    }
}
