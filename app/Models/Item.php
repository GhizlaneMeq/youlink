<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category',
        'status',
        'location',
        'dateLost',
        'dateFound',
        'user_id',
    ];

    protected $dates = ['dateLost', 'dateFound'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
