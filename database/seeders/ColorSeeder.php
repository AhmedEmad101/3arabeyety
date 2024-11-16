<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $x = 1;
        $Colors = array('Red',
                        'Orange',
                        'Brown',
                        'Yellow',
                        'Green',
                        'Turquoise',
                        'Blue');
                        foreach($Colors as $color){
                        DB::table('colors')->insert([
                            'id' => $x,
                            'Name'=>$color
                        ]);
                        $x++;
                    }
    }
}
