<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Author extends Model
{
    use HasUuids;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'status'
    ];
    
    public function books(): BelongsToMany {
        return $this->belongsToMany(Book::class, 'book_authors', 'author_id', 'book_id');
    }
}
