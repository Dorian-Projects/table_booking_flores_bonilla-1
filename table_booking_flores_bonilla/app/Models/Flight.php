<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    
    protected $fillable = ['airline_id', 'origin_airport_id', 'destination_airport_id', 'departure_time', 'arrival_time', 'price', 'available_seats'];

    public function airline()
    {
        return $this->belongsTo(Airline::class);
    }

    public function origin()
    {
        return $this->belongsTo(Airport::class, 'origin_airport_id');
    }

    public function destination()
    {
        return $this->belongsTo(Airport::class, 'destination_airport_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}

