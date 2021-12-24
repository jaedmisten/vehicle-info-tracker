@extends('layouts.app')

@section('content')
<h1>Vehicles</h1>
    <ul>
    @foreach ($vehicles as $vehicle)
    <li><a href="/vehicles/{{$vehicle->id}}">{{$vehicle->year}} {{$vehicle->make}} {{$vehicle->model}}</a></li>
    @endforeach
    </ul>
@endsection
