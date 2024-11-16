<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
class RedisController extends Controller
{
    public function redis(){

        $start = microtime(true);
        $Users = Cache::remember('users', 40, function () {
            sleep(2);
        });
        $end = microtime(true);
    $executionTime = $end - $start;
        return response()->json([
            'message' => 'Test with Redis completed.',
            'execution_time' => $executionTime
        ]);
    }
    public function noredis()
    {
        $start = microtime(true);
        $Users = User::all();
    // Simulate a time-consuming operation
    sleep(2);

    $end = microtime(true);
    $executionTime = $end - $start;

    return response()->json([
        'message' => 'Test without Redis completed.',
        'execution_time' => $executionTime
    ]);
    }
}
