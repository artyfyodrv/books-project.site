<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class BookController extends Controller
{
    public function showCategoriesIndex()
    {
        $categories = Category::all()->whereIn('category', ['PHP', 'Java', 'Microsoft', 'Internet',
            'PowerBuilder', 'Python', 'Business', 'Software Engineering', 'Web Development', 'Mobile Technology']);

        $subCategories = Category::all();

        return view('index/books/categories-list', compact('categories', 'subCategories'));
    }

    public function showBooksAdmin()
    {
        $booksData = Book::all();
        $categoriesData = Category::all();
        $authorsData = Author::all();

        return view('admin/books/books-list', compact('booksData', 'categoriesData', 'authorsData'));
    }

    public function newBook(Request $request)
    {
        $generateIsbn = mt_rand(1000000000, 9999999999);

        while (Book::where('isbn', $generateIsbn)->exists()) {
            $generateIsbn = mt_rand(1000000000, 9999999999);
        }

        $book = Book::create([
            'title' => $request->title,
            'isbn' => $generateIsbn,
            'status' => 'UNPUBLISHED'
        ]);

        $authors = Author::firstOrCreate(['name' => $request->name]);
        $authorFind = Author::find($authors);


        $categories = Category::firstOrCreate(['name' => $request->category]);
        $categoryFind = Category::find($categories);

        $book->categories()->attach($categoryFind);
        $book->authors()->attach($authorFind);

        return redirect()->route('admin-get-book', ['id' => $book->id]);
    }

    public function getBook($id)
    {
        $book = Book::findOrFail($id);
        $authors = $book->authors()->select('name')->get();
        $authorNames = $authors->pluck('name');
        $authorsData = $authorNames->implode(', ');

        $categories = $book->categories()->select('name')->get();

        return view('admin/books/show-book', compact('book', 'authors', 'authorsData'))->with('categories', $categories);
    }

    public function editBook(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        if ($request->status == 'PUBLISHED') {
            $currentDate = Carbon::now();
        } else {
            $currentDate = null;
        }

        Book::where('id', $id)
            ->update([
                'title' => $request->title,
                'pageCount' => $request->pages,
                'thumbnailUrl' => $request->url,
                'shortDescription' => $request->shortDescription,
                'longDescription' => $request->longDescription,
                'status' => $request->status,
                'publishedDate' => $currentDate
            ]);

        /** Логика авторов **/
        $authorNames = $request->name;
        $authorNamesArray = explode(',', $authorNames);
        $authorIds = [];

        foreach ($authorNamesArray as $authorName) {
            $authorName = trim($authorName);
            $author = Author::firstOrCreate(['name' => $authorName]);
            $authorIds[] = $author->id;

            // Если существует запись в объекте автора, не сохраняем в бд
            if (!$author->exists) {
                $author->save();
            }

            //Если нет автора то записываем, если есть или добавлен новый то удаляем и синхроним
            if (!$book->authors->contains($author->id)) {
                $book->authors()->attach($author->id);
            } else {
                $book->authors()->detach($author->id);
                $book->authors()->sync($author->id);
            }

            $book->authors()->sync($authorIds);
        }
        /** Логика категорий */
        $categories = Category::firstOrCreate(['name' => $request->category]);

        $categoryFind = Category::find($categories);

        $book->categories()->sync($categoryFind);

        return redirect()->back();
    }
}
