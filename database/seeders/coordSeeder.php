<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\coord;

class coordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        coord::create(['lon' => '-74.0817', 
        'lat' => '4.6097',
        'idcities' => 1
        ]);

        coord::create(['lon' => '-74.0817', 
        'lat' => '4.6097',
        'idcities' => 2
        ]);

        coord::create(['lon' => '-74.0817', 
        'lat' => '4.6097',
        'idcities' => 3
        ]);

        coord::create(['lon' => '-74.0817', 
        'lat' => '4.6097',
        'idcities' => 4
        ]);
    }
}
