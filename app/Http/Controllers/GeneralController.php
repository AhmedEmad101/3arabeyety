<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Gate;
use app\Policies\VehiclePolicy;
class GeneralController extends Controller
{
    public function index(Request $request,Vehicle $vehicle)
    {
        if (Gate::denies('delete', $vehicle)) {
            abort(403);
        }
    }
}

