<?php

use App\Http\Controllers\Api\v1\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::view('Result','Results.Result');
Route::view('searchpage','Results.search');
Route::view('items','PartialViews.gptfrontend.listofitems');
$pages = ['home','service', 'blog', 'about', 'team', 'feature', 'contact', 'cars','addvehicle','404','testimonial','signup','index','vehicledetails'];

foreach ($pages as $page) {
    Route::view($page, $page);
}
Route::get('av', function () {
    return view('PartialViews.AddVehicleForm');
});
Route::post('save', [VehicleController::class, 'store']);
Route::get('test', [VehicleController::class, 'index']);
Route::post('searchprice', [VehicleController::class, 'searchprice']);
Route::post('MultipleSearch', [VehicleController::class, 'MultipleSearch']);
Route::post('CreateUser', [SignupController::class, 'CreateUser']);
Route::get('vehicledetails/{id}', [VehicleController::class, 'PassVehicleToView']);
Route::post('ad', [VehicleController::class, 'AddVehicleByForm']);
