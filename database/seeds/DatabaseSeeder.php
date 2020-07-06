<?php

namespace App\Plugin\Example\Database;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(TestSeeder::class);
    }
}
