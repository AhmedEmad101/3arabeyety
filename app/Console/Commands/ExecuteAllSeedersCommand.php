<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class ExecuteAllSeedersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'execute-all-seeders-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {$classes = array(
        'ColorSeeder',
        'ConditionSeeder',
        'MotorSeeder'
        ,'TankSeeder'
        ,'TransimissionSeeder'
        ,'UserSeeder'
        ,'VehicleModelSeeder',
        'TypeSeeder'
        ,'VehicleSeeder');

        $this->info('Running all the seeders');
        foreach($classes as $class){
        Artisan::call('db:seed',['--class'=>$class]);
        $this->info('Successfully done '.$class);
        }
    }
}
