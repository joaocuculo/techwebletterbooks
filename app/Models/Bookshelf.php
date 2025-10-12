<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookshelf extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'user_id',
        'status',
        'name',
        'date'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function books() {
        return $this->belongsToMany(Book::class, 'bookshelf_items', 'bookshelf_id', 'book_id')
                    ->withPivot('status', 'added_at', 'reading_goal')
                    ->withTimestamps();
    }
}
