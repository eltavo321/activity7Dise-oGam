<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsersSeeder::class,
            RoboticsKitsSeeder::class,
        ]);

        factory(App\Models\Course::class, 100)->create();
    }
}
