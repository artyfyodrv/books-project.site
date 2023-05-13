<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'category',
    ];

    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_category');
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'author_category');
    }
}
