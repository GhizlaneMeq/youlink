<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventReservation extends Model
{
    protected $fillable = [
        'event_id',
        'user_id',
        'status',
        'comment',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    protected static function boot()
    {
        parent::boot();

        static::created(function ($reservation) {
            $event = $reservation->event;
            if ($event) {
                $event->decrement('availableSeats');
            }
        });
    }
}
