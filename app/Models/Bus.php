<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'plate_number',
    ];

    /**
     * Get the bus that belong to the trip.
     */
    public function seats()
    {
        return $this->hasMany(Seat::class);
    }

    /**
     * Get the bus that belong to the trip.
     */
    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
}
