<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\cloud;

class cloudsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        cloud::create(['dt' => '1611166746', 
        'idcities' => 4
        ]);
    }
}
