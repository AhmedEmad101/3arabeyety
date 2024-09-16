<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
$pages = ['home', 'service', 'blog', 'about', 'team', 'feature', 'contact', 'cars','addvehicle'];

foreach ($pages as $page) {
    Route::view($page, $page);
}
Route::get('av', function () {
    return view('PartialViews.AddVehicleForm');
});
