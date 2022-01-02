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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicle_create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = Auth::user()->id;
        Vehicle::store($userId, $request);
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
