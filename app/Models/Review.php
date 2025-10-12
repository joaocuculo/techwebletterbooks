<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'user_id',
        'book_id',
        'stars',
        'comment'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function book() {
        return $this->belongsTo(Book::class, 'book_id');
    }
}
