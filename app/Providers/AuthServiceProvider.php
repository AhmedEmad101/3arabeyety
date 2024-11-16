<?php

namespace App\Providers;

use App\Models\Vehicle;
use App\Policies\VehiclePolicy;
//use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
Vehicle::class => VehiclePolicy::class,
    ];
    public function register(): void
    {

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }
}
