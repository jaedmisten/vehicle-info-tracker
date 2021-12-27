@extends('layouts.app')

@section('content')
<h1>Vehicle</h1>

<strong>{{$vehicle->year}} {{$vehicle->make}} {{$vehicle->model}}</strong>
<hr>
<p>
    <strong>Engine</strong>:<br>
    Type: {{$vehicle->engine->type}}<br>
    Number of cylinders: {{$vehicle->engine->num_cylinders}}
</p>
<hr>
<strong>Events</strong>:<br>
@foreach($vehicle->event as $event)
{{$event->date}}: <u>{{$event->title}}</u>
<br>{{$event->summary}}
<hr>
@endforeach

@endsection
