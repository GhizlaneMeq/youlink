<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    use HasFactory;

    protected $fillable = [
        'requested_book_id',
        'received_book_id',
        'requester_id',
        'receiver_id',
        'status',
        'is_returned',
    ];

    public function requestedBook()
    {
        return $this->belongsTo(Book::class, 'requested_book_id');
    }

    public function receivedBook()
    {
        return $this->belongsTo(Book::class, 'received_book_id');
    }

    public function requester()
    {
        return $this->belongsTo(User::class, 'requester_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }
}
