<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasUuids;

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

    public function categories(): BelongsToMany {
        return $this->belongsToMany(Category::class, 'book_categories', 'book_id', 'category_id');
    }

    public function authors(): BelongsToMany {
        return $this->belongsToMany(Author::class, 'book_authors', 'book_id', 'author_id');
    }

    public function bookshelves(): BelongsToMany {
        return $this->belongsToMany(Bookshelf::class, 'bookshelf_items', 'book_id', 'bookshelf_id')
                    ->withPivot('status', 'added_at', 'reading_goal')
                    ->withTimestamps();
    }

    public function reviews(): HasMany {
        return $this->hasMany(Review::class, 'book_id');
    }
}
