<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    public $timestamps = false;

    protected $fillable = [
        'title',
        'isbn',
        'pageCount',
        'thumbnailUrl',
        'shortDescription',
        'longDescription',
        'status',
        'author_id',
        'category_id',
        'publishedDate'
    ];

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
