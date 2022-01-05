<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function event()
    {
        return $this->hasMany(Event::class);
    }
    
    public function engine()
    {
        return $this->hasOne(Engine::class);
    }
    
    public function store($userId, $request)
    {
        $vehicle = new Vehicle();
        $vehicle->user_id = $userId;
        $vehicle->vin = $request->input('vin');
        $vehicle->license_plate_num = $request->input('license_plate');
        $vehicle->make = $request->input('make');
        $vehicle->model = $request->input('model');
        $vehicle->year = $request->input('year');
        $vehicle->type = $request->input('type');
        $vehicle->num_doors = $request->input('num_doors');
        $vehicle->color = $request->input('color');
        $vehicle->currently_own = $request->input('currently_own');
        $vehicle->purchase_date = $request->input('purchase_date');
        $vehicle->purchase_mileage = $request->input('purchase_mileage');
        $vehicle->notes = $request->input('notes');
        $vehicle->save();
        return $vehicle->id;
    }
}
