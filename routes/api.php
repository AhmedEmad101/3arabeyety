<?php

use App\Http\Controllers\Api\v1\LoginController;
use App\Http\Controllers\Api\v1\VehicleController;
use App\Http\Controllers\Api\v1\UserController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\VehicleModelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use function Ramsey\Uuid\v1;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
route::get('all',[VehicleController::class,'index']);
route::get('vmodel/{id}',[VehicleController::class,'GetCarModel']);
/////////////////////////////////////////////////////////////////////
route::Post('AddVehicle',[VehicleController::class,'AddVehicle']);
/////////////////////////////////////////////////////////////////
route::Post('search/{min}/{max}',[VehicleController::class,'SearchByPriceRange']);
route::get('allusers',[UserController::class,'index']);
/////////////////////////////////
route::get('user/{id}',[UserController::class,'User']);
//////////////////////////////
route::get('allmotors',[MotorController::class,'index']);
route::get('allvehiclemodels',[VehicleModelController::class,'index']);
route::get('allusers',[UserController::class,'index']);
route::get('rc',[UserController::class,'RunCProgram']);
Route::get('search/{Model_ID}/{Tank_ID}/{Owner_ID}/{Transimision_ID}/{Type_ID}/{Motor_ID}/{Color_ID}/{Condition_ID}', [VehicleController::class, 'search']);
route::Post('MakeAccount',[LoginController::class,'Signup']);
//route::Post('login',[LoginController::class,'Login'])->middleware('auth:sanctum');
route::post('login',[LoginController::class,'Login']);
route::post('logout',[LoginController::class,'logout']);
////////////////////////////////////////////////////////

