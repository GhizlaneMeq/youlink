<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    use HasFactory;

    protected $fillable = [
        'requested_book_id',
        'offered_book_id',
        'requester_id',
        'offerer_id',
        'status',
    ];


    public function requestedBook()
    {
        return $this->belongsTo(Book::class, 'requested_book_id');
    }

    public function offeredBook()
    {
        return $this->belongsTo(Book::class, 'offered_book_id');
    }

    public function requester()
    {
        return $this->belongsTo(User::class, 'requester_id');
    }

    public function offerer()
    {
        return $this->belongsTo(User::class, 'offerer_id');
    }
}
