<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reservation;
use App\Models\Flight;
use App\Models\User;

class ReservationSeeder extends Seeder
{
    public function run()
    {
        $user_ids = User::pluck('id')->toArray();
        $flight_ids = Flight::pluck('id')->toArray();


        $reservations = [
            [
                'user_id' => $user_ids[array_rand($user_ids)],
                'flight_id' => $flight_ids[array_rand($flight_ids)],
                'passengers' => rand(1, 5),
                'notes' => 'Ventana',
            ],
            [
                'user_id' => $user_ids[array_rand($user_ids)],
                'flight_id' => $flight_ids[array_rand($flight_ids)],
                'passengers' => rand(1, 5),
                'notes' => 'Pasillo',
            ],
            [
                'user_id' => $user_ids[array_rand($user_ids)],
                'flight_id' => $flight_ids[array_rand($flight_ids)],
                'passengers' => rand(1, 5),
                'notes' => 'Ventana',
            ],
            [
                'user_id' => $user_ids[array_rand($user_ids)],
                'flight_id' => $flight_ids[array_rand($flight_ids)],
                'passengers' => rand(1, 5),
                'notes' => 'Pasill',
            ],
            [
                'user_id' => $user_ids[array_rand($user_ids)],
                'flight_id' => $flight_ids[array_rand($flight_ids)],
                'passengers' => rand(1, 5),
                'notes' => 'entana',
            ],
        ];

        foreach ($reservations as $reservation) {
            Reservation::create($reservation);
        }
    }
}
