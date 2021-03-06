<?php

namespace App\Http\Controllers;

use App\Models\Engine;
use App\Models\Event;
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
        $request->validate([
            'make'          => 'required',
            'model'         => 'required',
            'year'          => 'required',
            'type'          => 'required',
            'currently_own' => 'required',
            'engine_type'   => 'required'
        ]);
        $userId = Auth::user()->id;
        $vehicleId = Vehicle::store($userId, $request);
        if (isset($vehicleId)) {
            $engineDetails['vehicle_id'] = $vehicleId;
            $engineDetails['type'] = $request->input('engine_type');
            $engineDetails['num_cylinders'] = $request->input('num_cylinders');
            $engineDetails['notes'] = $request->input('notes');
            Engine::store($engineDetails);       
            return redirect('vehicles');
        }
        
        abort(500, 'Error saving vehicle');
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
