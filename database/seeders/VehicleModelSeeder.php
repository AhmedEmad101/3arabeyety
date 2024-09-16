<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class VehicleModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $x = 1;
        $VehicleNames = array('Tiota','BMW','Marcedes','Hionday','Kia','Jeep','VW Golf VII','Audi A1 S-Line','Toyota Camry');
        foreach($VehicleNames as $Vehicle_Names){
            DB::table('vehicle_models')->insert([
                'Name' => $Vehicle_Names,
                'Year' => 2010,

            ]);
        }
    }
}
