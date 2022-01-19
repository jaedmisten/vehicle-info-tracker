@extends('layouts.app')

@section('content')
<a href="/vehicles">View All Vehicles</a><br><br>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<h1>Add Vehicle</h1>
<form id="addVehicleForm" name="addVehicleForm" action="/vehicle" method="POST">
    @csrf
    VIN: <input type="text" id="vin" name="vin" value=""><br>
    License Plate Number: <input type="text" id="licensePlate" name="license_plate" value=""><br>
    Make (required): <input type="text" id="make" name="make" value=""><br>
    Model (required): <input type="text" id="model" name="model" value=""><br>
    Year (required): <input type="text" id="year" name="year" value=""><br>
    Type (required): <input type="text" id="type" name="type" value=""><br>
    Number Of Doors: <input type="text" id="num_doors" name="num_doors" value=""><br>
    Color: <input type="text" id="type" name="color" value=""><br>
    Currently Own: <input type="text" id="own" name="currently_own" value=""><br>
    Purchase Date: <input type="text" id="purchase_date" name="purchase_date" value=""><br>
    Purchase Mileage: <input type="text" id="purchase_mileage" name="purchase_mileage" value=""><br>
    Notes: <textarea id="notes" name="notes" value=""></textarea><br>
    <hr>
    Engine Details:<br>
    Type (required): <input type="text" id="engine_type" name="engine_type" value=""><br>
    Number Of Cylinders: <input type="text" id="num_cylinders" name="num_cylinders" value=""><br>
    Notes: <textarea id="engine_notes" name="engine_notes" value=""></textarea>
    <br>
    <input type="submit" id="submit" name="submit" value="submit">
</form>
@endsection

