<?php

namespace App\Console\Commands;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

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
        print_r('<pre>');


        foreach ($data as $parse) {

            $categoryList = implode(' ', $parse['categories']);
            echo $categoryList . "\n";
            Category::firstOrCreate(['category' => $categoryList]);

            $authorsList = implode(' ', $parse['authors']);
            echo $authorsList . "\n";
            Author::firstOrCreate(['author' => $authorsList]);
            ;
        }


        $this->info('Данные успешно импортированы!');
    }
}
