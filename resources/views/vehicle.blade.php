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
@if (isset($vehicle->engine))
<p>
    <strong>Engine</strong>:<br>
    Type: {{$vehicle->engine->type}}<br>
    Number of cylinders: {{$vehicle->engine->num_cylinders}}<br>
    Notes: {{$vehicle->engine->notes}}
</p>
<hr>
@endif

<strong>Events</strong>:<br>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Event
</button> An event can be service maintenance, a crash, or any other event that you want to log for this vehicle.
<br><br>
@if ($vehicle->events->isNotEmpty())
    @foreach($vehicle->events as $event)
    {{$event->date}}: <u>{{$event->title}}</u>
    <br>{{$event->summary}}
    <hr>
    @endforeach
@endif

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Event</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="/event" method="post">
              @csrf
              <input type="hidden" name="vehicle_id" value="{{$vehicle->id}}">
              Title (required): <input type="text" name="title" value=""><br>
              Mechanic: <input type="text" name="mechanic" value=""><br>
              Summary: <input type="text" name="summary" value=""><br>
              Date (required): <input type="text" name="date" value=""><br>
              <input type="submit" id="submit" name="submit" value="submit">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection
