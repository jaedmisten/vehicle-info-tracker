@extends('layouts.app')

@section('content')
<h1>Add Vehicle</h1>

<form id="addVehicle" name="addVehicle" action="/vehicle" method="POST">
    @csrf
    VIN: <input type="text" id="vin" name="vin" value=""><br>
    License Plate Number: <input type="text" id="licensePlate" name="licensePlate" value=""><br>
    Make: <input type="text" id="make" name="make" value=""><br>
    Model: <input type="text" id="model" name="model" value=""><br>
    Year: <input type="text" id="year" name="year" value=""><br>
    Type: <input type="text" id="type" name="type" value=""><br>
    Number Of Doors: <input type="text" id="numDoors" name="numDoors" value=""><br>
    Color: <input type="text" id="type" name="color" value=""><br>
    Currently Own: <input type="text" id="own" name="currentlyOwn" value=""><br>
    Purchase Date: <input type="text" id="purchaseDate" name="purchaseDate" value=""><br>
    Purchase Mileage: <input type="text" id="purchaseMileage" name="purchaseMileage" value=""><br>
    Notes: <textarea id="notes" name="notes" value=""></textarea>
    <br>
    
    <input type="submit" id="submit" name="submit" value="submit">
</form>

@endsection

