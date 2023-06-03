<?php

namespace Database\Seeders;

use Illuminate\Daatabase\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersSeeder::class,
	    TweetsSeeder::class
        ]);
    }
}
