<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Airport;

class AirportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
            $airports =[
                ['name' => 'Aeropuerto de Madrid', 'code' => 'MAD', 'city' => 'Madrid', 'country' => 'España'],
                ['name' => 'Aeropuerto de Barcelona', 'code' => 'BCN', 'city' => 'Barcelona', 'country' => 'España'],
                ['name' => 'Aeropuerto de París', 'code' => 'CDG', 'city' => 'París', 'country' => 'Francia'],
                ['name' => 'Aeropuerto de Frankfurt', 'code' => 'FRA', 'city' => 'Frankfurt', 'country' => 'Alemania'],
                ['name' => 'Aeropuerto de Londres', 'code' => 'LHR', 'city' => 'Londres', 'country' => 'Reino Unido'],
                ['name' => 'Aeropuerto de Roma', 'code' => 'FCO', 'city' => 'Roma', 'country' => 'Italia'],
                ['name' => 'Aeropuerto de Ámsterdam', 'code' => 'AMS', 'city' => 'Ámsterdam', 'country' => 'Países Bajos'],
                ['name' => 'Aeropuerto de Japon', 'code' => 'J', 'city' => 'Tokyo', 'country' => 'Japon'],
                ['name' => 'Aeropuerto de Sevilla', 'code' => 'SE', 'city' => 'Sevilla', 'country' => 'España'],
                ['name' => 'Aeropuerto de Malaga', 'code' => 'ML', 'city' => 'Malaga', 'country' => 'España'],
            ];
            foreach ($airports as $airport) {
                Airport::create($airport);
            }
    }
}
