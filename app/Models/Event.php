<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
    
    public function store($request) {
        $event = new Event();
        $event->vehicle_id = $request['vehicle_id'];
        $event->date = $request['date'];
        $event->mileage = $request['mileage'];
        $event->title = $request['title'];
        $event->mechanic = $request['mechanic'];
        $event->summary = $request['summary'];
        $event->save();
        return $event;
    }
}
