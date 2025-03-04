<?php

namespace Database\Seeders;

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Flight;
use App\Models\Airline;
use App\Models\Airport;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $airline_ids = Airline::pluck('id')->toArray();
        $airport_ids = Airport::pluck('id')->toArray();

        

        $flights = [
            [
                'airline_id' => $airline_ids[array_rand($airline_ids)],
                'origin_airport_id' => $airport_ids[0],
                'destination_airport_id' => $airport_ids[1],
                'departure_time' => '2025-03-06 11:59:59',
                'arrival_time' => '2025-03-06 11:59:59',
                'price' => 50,
                'available_seats' => 10,
            ],
            [
                'airline_id' => $airline_ids[array_rand($airline_ids)],
                'origin_airport_id' => $airport_ids[2],
                'destination_airport_id' => $airport_ids[3],
                'departure_time' => '2025-03-07 11:59:59',
                'arrival_time' => '2025-03-07 11:59:59',
                'price' => 90,
                'available_seats' => 60,
            ],
            [
                'airline_id' => $airline_ids[array_rand($airline_ids)],
                'origin_airport_id' => $airport_ids[4],
                'destination_airport_id' => $airport_ids[5],
                'departure_time' => '2025-03-08 11:59:59',
                'arrival_time' => '2025-03-08 11:59:59',
                'price' => 40,
                'available_seats' => 5,
            ],
            [
                'airline_id' => $airline_ids[array_rand($airline_ids)],
                'origin_airport_id' => $airport_ids[6],
                'destination_airport_id' => $airport_ids[7],
                'departure_time' => '2025-03-08 11:59:59',
                'arrival_time' => '2025-03-08 11:59:59',
                'price' => 5,
                'available_seats' => 1,
            ],
        ];

        foreach ($flights as $flight) {
            Flight::create($flight);
        }
    }
}
