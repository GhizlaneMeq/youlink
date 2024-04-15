<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'avatar',
        'description',
        'email_verified_at',
        'address',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    
    public function hasRole($roleName)
    {
        return $this->roles->contains('name', $roleName);
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function bookReservations()
    {
        return $this->hasMany(BookReservation::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function reservations()
    {
        return $this->hasMany(EventReservation::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function ($user) {
            $user->roles()->attach(Role::where('name', 'user')->first());
        });
    }
}
