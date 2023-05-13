<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $table = 'authors';

    protected $fillable = [
        'author',
    ];

    public function books()
    {
        return $this->belongsToMany(Book::class, 'author_book');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'author_category');
    }
}
