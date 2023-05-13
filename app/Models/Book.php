<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
        'title',
        'isbn',
        'pageCount',
        'thumbnailUrl',
        'shortDescription',
        'longDescription',
        'status',
        'authors_id',
        'categories_id',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'categories');
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'authors');
    }
}