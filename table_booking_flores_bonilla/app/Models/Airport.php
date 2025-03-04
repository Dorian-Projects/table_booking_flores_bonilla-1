<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
  protected $fillable = ['name', 'code', 'city', 'country'];

    public function departures()
    {
        return $this->hasMany(Flight::class, 'origin_airport_id');
    }

    public function arrivals()
    {
        return $this->hasMany(Flight::class, 'destination_airport_id');
    }
}