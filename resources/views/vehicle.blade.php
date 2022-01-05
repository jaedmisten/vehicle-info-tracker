@extends('layouts.app')

@section('content')
<a href="/vehicles">View All Vehicles</a><br><br>
<h1>Vehicle</h1>

<strong>{{$vehicle->year}} {{$vehicle->make}} {{$vehicle->model}}</strong><br>
Type: {{$vehicle->type}}<br>
VIN: {{$vehicle->vin}}<br>
License Plate Number: {{$vehicle->license_plate_num}}<br>
Color: {{$vehicle->color}}<br>
Notes: {{$vehicle->notes}}<br>
<br>

{{$vehicle}}

<hr>
<?php if (isset($vehicle->engine)): ?>
<p>
    <strong>Engine</strong>:<br>
    Type: {{$vehicle->engine->type}}<br>
    Number of cylinders: {{$vehicle->engine->num_cylinders}}<br>
    Notes: {{$vehicle->engine->notes}}
</p>
<hr>
<?php endif; ?>

<?php if ($vehicle->events->isNotEmpty()): ?>
<strong>Events</strong>:<br>
@foreach($vehicle->events as $event)
{{$event->date}}: <u>{{$event->title}}</u>
<br>{{$event->summary}}
<hr>
@endforeach
<?php endif; ?>

@endsection
