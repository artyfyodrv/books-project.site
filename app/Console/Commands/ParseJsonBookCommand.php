<?php

namespace App\Console\Commands;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Console\Command;

class ParseJsonBookCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'parse:book';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $json = file_get_contents('https://gitlab.com/prog-positron/test-app-vacancy/-/raw/master/books.json');
        $data = json_decode($json, true);

        foreach ($data as $parse) {



            $categoryList = implode(' , ', $parse['categories']);
//            echo $categoryList . "\n";
            $categories = Category::firstOrCreate(['category' => $categoryList]);

            $authorsList = implode(' , ', $parse['authors']);
//            echo $authorsList . "\n";
            $authors = Author::firstOrCreate(['author' => $authorsList]);

            $date_str = $parse['publishedDate']['$date'] ?? null;
            $formatted_date = null;
            if ($date_str !== null) {
                $date = Carbon::createFromFormat('Y-m-d\TH:i:s.uO', $date_str, substr($date_str, -5));
                $date->setTimezone(substr($date_str, -5));
                $formatted_date = $date->format('Y-m-d');
            }

            $booksData = Book::firstOrCreate([
               'title' => $parse['title'],
               'pageCount' => $parse['pageCount'],
               'status' => $parse['status'],
                'isbn' => $parse['isbn'] ?? 0,
                'shortDescription' => $parse['shortDescription'] ?? 0,
                'longDescription' => $parse['longDescription'] ?? 0,
                'thumbnailUrl' => $parse['thumbnailUrl'] ?? 0,
                'publishedDate' => $formatted_date,
                'category_id' => $categories->id,
                'author_id' => $authors->id
            ]);

            print_r($categories . "\n");

        }


        $this->info('Данные успешно импортированы!');
    }
}
