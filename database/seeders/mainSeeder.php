<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\main;

class mainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

            main::create(['temp' => '20', 
                'feels_like' => '14.35',
                'temp_min' => '20',
                'temp_max' => '20',
                'pressure' => '1024',
                'humidity' => '30',
                'idcities' => 1,
            ]);

            main::create(['temp' => '20', 
                'feels_like' => '14.35',
                'temp_min' => '20',
                'temp_max' => '20',
                'pressure' => '1024',
                'humidity' => '30',
                'idcities' => 1,
            ]);

            main::create(['temp' => '20', 
                'feels_like' => '14.35',
                'temp_min' => '20',
                'temp_max' => '20',
                'pressure' => '1024',
                'humidity' => '30',
                'idcities' => 1,
            ]);

            main::create(['temp' => '20', 
                'feels_like' => '14.35',
                'temp_min' => '20',
                'temp_max' => '20',
                'pressure' => '1024',
                'humidity' => '30',
                'idcities' => 1,
            ]);
    }
}
