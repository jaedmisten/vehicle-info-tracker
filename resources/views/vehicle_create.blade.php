@extends('layouts.app')

@section('content')
<h1>Add Vehicle</h1>

<form id="addVehicle" name="addVehicle" action="/vehicle" method="POST">
    @csrf
    VIN: <input type="text" id="vin" name="vin" value=""><br>
    License Plate Number: <input type="text" id="licensePlate" name="licensePlate" value=""><br>
    Make: <input type="text" id="make" name="make" value=""><br>
    <br>
    
    <input type="submit" id="submit" name="submit" value="submit">
</form>

@endsection

