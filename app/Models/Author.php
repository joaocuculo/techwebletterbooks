<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'status'
    ];
    
    public function books() {
        return $this->belongsToMany(Book::class, 'book_authors', 'author_id', 'book_id');
    }
}
