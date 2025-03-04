<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Airline;

class AirlineSeeder extends Seeder
{
    public function run()
    {

        $airlines = [
            ['name' => 'Iberia', 'code' => 'IB', 'description' => 'viaje con iberia'],
            ['name' => 'Ryanair', 'code' => 'RY', 'description' => 'vaya mierda aerolinea'],
            ['name' => 'Japan Airlines', 'code' => 'JA', 'description' => 'llevame a japon'],
            ['name' => 'Emirates', 'code' => 'E', 'description' => 'nos fuimos pa los emiratos']
        ];

        foreach ($airlines as $airline) {
            Airline::create($airline);
        }


    }
}
