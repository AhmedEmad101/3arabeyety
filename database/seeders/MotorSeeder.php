<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MotorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('motors')->insert([
            'id' => 1,
            'Name'=>'Flat engine'
        ]);
        DB::table('motors')->insert([
            'id' => 2,
            'Name'=>'Four-cylinder'
        ]);
        DB::table('motors')->insert([
            'id' => 3,
            'Name'=>'Inline'
        ]);
        DB::table('motors')->insert([
            'id' => 4,
            'Name'=>'Five-cylinder'
        ]);
    }
}
