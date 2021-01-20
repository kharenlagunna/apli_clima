<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\wind;
class windSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        wind::create(['speed' => '5.66', 
        'deg' => '120', 
        'idcities' => 1
        ]);

        wind::create(['speed' => '5.66', 
        'deg' => '120', 
        'idcities' => 2
        ]);

        wind::create(['speed' => '5.66', 
        'deg' => '120', 
        'idcities' => 3
        ]);

        wind::create(['speed' => '5.66', 
        'deg' => '120', 
        'idcities' => 4
        ]);
    }
}
