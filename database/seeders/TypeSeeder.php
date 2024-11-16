<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $x = 1;
       $Types = array('car','motorcycle','ship','plane');
       foreach($Types as $type)
       {
        DB::table('types')->insert([
            'id' => $x,
            'Type_Name'=>$type
        ]);
        $x++;
       }
    }
}
