<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'picture',
        'description',
        'category',
        'status',
        'location',
        'dateLost',
        'dateFound',
        'owner_id', 
        'creator_id', 
    ];

    protected $dates = ['dateLost', 'dateFound'];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }
}
