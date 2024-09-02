<?php

use App\Http\Controllers\Api\v1\TravelsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
route::get('travels/{id}',[VehicleController::class,'index']);
