<?php

namespace App\Providers;

use App\Models\Color;
use App\Models\Condition;
use App\Models\Motor;
use App\Models\Type;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Models\Vehicle;
use App\Models\VehicleModel;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
       view()->composer(['home','cars'], function ($view) {

            $Vehicle = Vehicle::all();

            $view->with(['Vehicles'=>$Vehicle]);
        });
        view()->composer(['PartialViews.AddVehicleForm'], function ($view) {

            $Vehicle = Vehicle::all();
            $Vehicle_Models = VehicleModel::all();
            $Vehicle_Motors = Motor::all();
            $Vehicle_Types = Type::all();
            $Vehicle_Colors = Color::all();
            $Vehicle_Condition = Condition::all();
            $view->with(['Vehicles'=>$Vehicle
            ,'VModels'=>$Vehicle_Models
            ,'VMotors'=>$Vehicle_Motors,
            'VTypes'=>$Vehicle_Types,
            'VColors'=>$Vehicle_Colors,
            'VConditions'=>$Vehicle_Condition]);
        });
    }
}
