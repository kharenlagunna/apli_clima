<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\weather;

class weatherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        weather::create(['main' => 'Clouds', 
        'description' => 'broken clouds',
        'icon' => '04d',
        'idcities' => 1
        ]);

        weather::create(['main' => 'Clouds', 
        'description' => 'broken clouds',
        'icon' => '04d',
        'idcities' => 2
        ]);

        weather::create(['main' => 'Clouds', 
        'description' => 'broken clouds',
        'icon' => '04d',
        'idcities' => 3
        ]);

        weather::create(['main' => 'Clouds', 
        'description' => 'broken clouds',
        'icon' => '04d',
        'idcities' => 4
        ]);
    }
}
