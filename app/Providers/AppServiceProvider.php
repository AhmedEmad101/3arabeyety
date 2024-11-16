<?php

namespace App\Providers;

use App\Models\Color;
use App\Models\Condition;
use App\Models\Motor;
use App\Models\Tank;
use App\Models\Transimission;
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
            $Vehicle_Motor = Motor::all();
            $Vehicle_Type = Type::all();
            $Vehicle_Color = Color::all();
            $Vehicle_Condition = Condition::all();
            $Vehicle_Tank = Tank::all();
            $Vehicle_Transimission = Transimission::all();
            $view->with(['Vehicles'=>$Vehicle
            ,'VModels'=>$Vehicle_Models
            ,'VMotor'=>$Vehicle_Motor,
            'VType'=>$Vehicle_Type,
            'VColor'=>$Vehicle_Color,
            'VConditions'=>$Vehicle_Condition,
            'VTank'=>$Vehicle_Tank,
            'VTransimission'=>$Vehicle_Transimission
        ]);
        });
        view()->composer(['PartialViews.Carousel'], function ($view) {


            $Vehicle_Models = VehicleModel::all();
            $Vehicle_Motor = Motor::all();
            $Vehicle_Type = Type::all();
            $Vehicle_Color = Color::all();
            $Vehicle_Condition = Condition::all();
            $Vehicle_Tank = Tank::all();
            $Vehicle_Transimission = Transimission::all();
            $view->with([
            'VModels'=>$Vehicle_Models
            ,'VMotor'=>$Vehicle_Motor,
            'VType'=>$Vehicle_Type,
            'VColor'=>$Vehicle_Color,
            'VConditions'=>$Vehicle_Condition,
            'VTank'=>$Vehicle_Tank,
            'VTransimission'=>$Vehicle_Transimission
        ]);
        });
    }
}
