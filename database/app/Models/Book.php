<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'description', 'image', 'user_id', 'book_category_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(BookCategory::class);
    }

    public function bookReservations()
    {
        return $this->hasMany(BookReservation::class);
    }

    public function requestedExchanges()
    {
        return $this->hasMany(Exchange::class, 'requested_book_id');
    }

    public function receivedExchanges()
    {
        return $this->hasMany(Exchange::class, 'received_book_id');
    }

}
