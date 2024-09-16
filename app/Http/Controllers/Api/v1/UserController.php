<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }
    public function search()
    {

    }
    public function RunCProgram()
    {
        $executablePath = 'D:\A EMAD PROGRAMS\LaravelCIntegration\bin\Debug\LaravelCIntegration.exe';

        if (!file_exists($executablePath)) {
            return response()->json(['error' => 'Executable not found.']);
        }
        $output = [];
        $returnVar = 0;
        exec('"' . $executablePath . '" 2>&1', $output, $returnVar);

        return response()->json([
            'output' => implode("\n", $output),
            'returnVar' => $returnVar
        ]);
}
}
