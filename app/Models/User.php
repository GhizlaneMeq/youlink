<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
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

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function bookReservations()
    {
        return $this->hasMany(BookReservation::class);
    }




    protected static function boot()
    {
        parent::boot();
    
        static::created(function ($user) {
            $defaultRole = Role::where('name', 'user')->first();
    
            $user->roles()->attach($defaultRole);
        });
    }
}
