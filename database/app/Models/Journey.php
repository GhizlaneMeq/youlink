<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journey extends Model
{
    use HasFactory;

    protected $fillable = [
        'origin',
        'destination', 
        'date', 
        'status', 
        'departureTime', 
        'availableSeats', 
        'cost'
    ];

    public function passengers(){
        return $this->hasMany(Passenger::class);
    }
    
}
