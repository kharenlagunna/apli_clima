<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class citySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        City::create(['name' => 'Bogota', 
                        'cod' => '200', 
                        'timezone' => '-180000', 
                        'dt' => '1611166746',
                        'visibility' => '10000',
                        'base' =>'stations'
        ]);

        City::create(['name' => 'Medellin', 
                        'cod' => '201', 
                        'timezone' => '-180000', 
                        'dt' => '1611166746',
                        'visibility' => '10000',
                        'base' =>'stations'
        ]);

        City::create(['name' => 'Cali', 
                        'cod' => '202', 
                        'timezone' => '-180000', 
                        'dt' => '1611166746',
                        'visibility' => '10000',
                        'base' =>'stations'
        ]);
        City::create(['name' => 'Miami', 
                        'cod' => '203', 
                        'timezone' => '-180000', 
                        'dt' => '1611166746',
                        'visibility' => '10000',
                        'base' =>'stations'
        ]);
    }
}
