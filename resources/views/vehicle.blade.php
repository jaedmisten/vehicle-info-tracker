@extends('layouts.app')

@section('content')
<h1>Vehicle</h1>


{{$vehicle}}

<strong>{{$vehicle->year}} {{$vehicle->make}} {{$vehicle->model}}</strong>
<hr>
Events:<br>
<?php
foreach($vehicle['events'] as $event) {
  echo "$event->date: $event->title<br>";
  echo $event->summary . "<hr>";
}
?>
@endsection
