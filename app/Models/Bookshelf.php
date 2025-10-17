<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Bookshelf extends Model
{
    use HasUuids;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'user_id',
        'status',
        'name',
        'date'
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function books(): BelongsToMany {
        return $this->belongsToMany(Book::class, 'bookshelf_items', 'bookshelf_id', 'book_id')
                    ->withPivot('status', 'added_at', 'reading_goal')
                    ->withTimestamps();
    }
}
