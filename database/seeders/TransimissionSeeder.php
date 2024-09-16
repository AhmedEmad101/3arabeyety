<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TransimissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transimissions')->insert([
            'id' => 1,
            'Transmission_Name'=>'Manual'
        ]);
        DB::table('transimissions')->insert([
            'id' => 2,
            'Transmission_Name'=>'Automatic'
        ]);
    }
}
