<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engine extends Model
{
    use HasFactory;
    
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
      
    public function store($engineDetails)
    {
        $engine = new Engine();
        $engine->vehicle_id = $engineDetails['vehicle_id'];
        $engine->type = $engineDetails["type"];
        $engine->num_cylinders = $engineDetails['num_cylinders'];
        $engine->notes = $engineDetails['notes'];
        $engine->save();
    }
}
