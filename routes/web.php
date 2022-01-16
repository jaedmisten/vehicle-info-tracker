<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function() {
    Route::view('/home', 'home')->middleware('auth');
    Route::get('/vehicles', 'App\Http\Controllers\VehicleController@index');
    Route::get('/vehicles/{id}', 'App\Http\Controllers\VehicleController@show');
    Route::get('/vehicle/create', 'App\Http\Controllers\VehicleController@create');
    Route::post('/vehicle', 'App\Http\Controllers\VehicleController@store');
    Route::post('/event', 'App\Http\Controllers\EventController@store');
});


