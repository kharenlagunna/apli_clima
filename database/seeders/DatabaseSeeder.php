<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(citySeeder::class);
        $this->call(cloudsSeeder::class);
        $this->call(coordSeeder::class);
        $this->call(mainSeeder::class);
        $this->call(sysSeeder::class);
        $this->call(weatherSeeder::class);
        $this->call(windSeeder::class); 
    }
}
