<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookshelfItem extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'bookshelf_id',
        'book_id',
        'status',
        'added_at',
        'reading_goal'
    ];

    public function bookshelf() {
        return $this->belongsTo(Bookshelf::class, 'bookshelf_id');
    }

    public function book() {
        return $this->belongsTo(Book::class, 'book_id');
    }

}
