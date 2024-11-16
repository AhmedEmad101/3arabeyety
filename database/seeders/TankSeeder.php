<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {  $x = 1;
        $Fuel_Type = array('Fuel','Gas','Electric');
        foreach($Fuel_Type as $FuelType){
        DB::table('tanks')->insert([
            'id' => $x,
            'Fuel_Type'=>$FuelType
        ]);
        $x++;
    }
    }
}
