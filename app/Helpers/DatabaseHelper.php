<?php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class DatabaseHelper
{
    public static function getAllDataFromTable($tableName)
    {
        // Use the DB facade to query all data from the table
        $data = DB::table($tableName)->get();

        // Return the data as JSON
        return response()->json($data);
    }
}
