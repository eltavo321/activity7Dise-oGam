<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoboticsKitsSeeder extends Seeder
{
    public function run()
    {
        DB::table('robotics_kits')->insert([
            ['name' => 'StarterKit'],
            ['name' => 'Educational Robotics Kit'],
            ['name' => 'Kit5']
        ]);
    }
}