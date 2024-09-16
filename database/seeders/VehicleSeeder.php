<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($x = 0;$x<5;$x++){
            DB::table('vehicles')->insert([

                'Model_ID'=>  $faker->numberBetween(1, 4),
                'Tank_ID'=>  $faker->numberBetween(1, 3),
                'Owner_ID'=>  $faker->numberBetween(1, 4),
                'Transimision_ID'=>  $faker->numberBetween(1, 2),
                'Type_ID'=>  $faker->numberBetween(1, 4),
                'Motor_ID'=>  $faker->numberBetween(1, 4),
                'Condition_ID'=>  $faker->numberBetween(1, 4),
                'Color_ID'=>  $faker->numberBetween(1, 4),
                'Price'=>  $faker->numberBetween(1, 4),
                'Photo'=>  Str::random(10).'png',

            ]);
    }
}}
