<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class BookshelfItem extends Model
{
    use HasUuids;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'bookshelf_id',
        'book_id',
        'status',
        'added_at',
        'reading_goal'
    ];

    public function bookshelf(): BelongsTo {
        return $this->belongsTo(Bookshelf::class, 'bookshelf_id');
    }

    public function book(): BelongsTo {
        return $this->belongsTo(Book::class, 'book_id');
    }

}
