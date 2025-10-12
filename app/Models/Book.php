<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'isbn',
        'status',
        'title',
        'publisher',
        'page_count',
        'cover_url'
    ];

    public function categories() {
        return $this->belongsToMany(Category::class, 'book_categories', 'book_id', 'category_id');
    }

    public function authors() {
        return $this->belongsToMany(Author::class, 'book_authors', 'book_id', 'author_id');
    }

    public function bookshelves() {
        return $this->belongsToMany(Bookshelf::class, 'bookshelf_items', 'book_id', 'bookshelf_id')
                    ->withPivot('status', 'added_at', 'reading_goal')
                    ->withTimestamps();
    }

    public function reviews() {
        return $this->hasMany(Review::class, 'book_id');
    }
}
