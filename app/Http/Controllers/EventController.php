<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'date'  => 'required',
            'title' => 'required'
        ]);
        $event = Event::store($request);
        if ($event) {
            return back();
        }
        
        abort(500, 'Error saving event');
    }
}
