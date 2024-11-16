<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Condition = array('New','Used','Exellent','Good','Decent','Bad');
        $x = 1;
        foreach($Condition as $condition){
        DB::table('conditions')->insert([
            'id' => $x,
            'Vehicle_Condition'=> $condition
        ]);
        $x++;
    }
    }
}
