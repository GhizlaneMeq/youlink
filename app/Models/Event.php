<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'image',
        'description',
        'date',
        'location',
        'availableSeats',
        'takenSeats',
        'status',
        'reservationMethod',
        'event_category',
        'user_id',
    ];

    protected $dates = ['date'];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reservations()
    {
        return $this->hasMany(EventReservation::class);
    }
}
