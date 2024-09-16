<?php

use App\Http\Controllers\Api\v1\VehicleController;
use App\Http\Controllers\Api\v1\UserController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\VehicleModelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
route::get('all',[VehicleController::class,'index']);
route::get('vmodel/{id}',[VehicleController::class,'GetCarModel']);
route::Post('AddVehicle',[VehicleController::class,'AddVehicle']);
route::get('allusers',[UserController::class,'index']);
route::get('allmotors',[MotorController::class,'index']);
route::get('allvehiclemodels',[VehicleModelController::class,'index']);
route::get('allusers',[UserController::class,'index']);
route::get('rc',[UserController::class,'RunCProgram']);
Route::get('search/{Model_ID}/{Tank_ID}/{Owner_ID}/{Transimision_ID}/{Type_ID}/{Motor_ID}/{Color_ID}/{Condition_ID}', [VehicleController::class, 'search']);
