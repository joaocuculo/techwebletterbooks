<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'status'
    ];
    
    public function books() {
        return $this->belongsToMany(Book::class, 'book_categories', 'category_id', 'book_id');
    }
}
