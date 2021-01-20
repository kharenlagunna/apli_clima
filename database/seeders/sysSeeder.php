<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\sys;

class sysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        sys::create(['type' => '1', 
            'country' => 'CO',
            'sunrise' => '1611141026',
            'sunset' => '1611183844',
            'idcities' => 1
        ]);

        sys::create(['type' => '1', 
            'country' => 'CO',
            'sunrise' => '1611141026',
            'sunset' => '1611183844',
            'idcities' => 2
        ]);

        sys::create(['type' => '1', 
            'country' => 'CO',
            'sunrise' => '1611141026',
            'sunset' => '1611183844',
            'idcities' => 3
        ]);

        sys::create(['type' => '1', 
            'country' => 'EE.UU',
            'sunrise' => '1611141026',
            'sunset' => '1611183844',
            'idcities' => 4
        ]);

    }
}
