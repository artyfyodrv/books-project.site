<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/../css/book/book.css" media="screen" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="wrap">
    <div class="book-img">
        <p class="book_title">{{ $book->title }}</p>
        <img src="{{ $book->thumbnailUrl }}">

        <p class="book_isbn"> Артикул: {{ $book->isbn }} </p>
        <p class="book_author"> Автор:
            @foreach ($authors as $author)
                {{ ( $author->name . ',') }}
            @endforeach
        </p>
        <p class="book_published"> Дата публикации: {{ $book->publishedDate }}</p>
        <p class="book_pages"> Страниц {{ $book->pageCount }}</p>
    </div>

    <div class="book-data">
        <div class="descriptions">
            <h4>Краткое описание</h4>
            <p class="shortDescription"> {{ $book->shortDescription }}</p>
            <h4>Подробное описание</h4>
            <p class="longDescription"> {{ $book->longDescription }}</p>
        </div>
    </div>

    <div class="edit_book">
        <form method="POST" action="{{ route('edit-book', $book->id) }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputTitle" class="form-label">Название(title)</label>
                <input type="text" class="form-control" id="title" name="title" aria-label="1"
                       value="{{ $book->title }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Автор</label>
                <input type="text" id="name" name="name" class="form-control" list="my-list" aria-label="6"
                       value="{{ $authorsData }}">

            </div>
            <div class="mb-3">
                <label for="exampleInputUrl" class="form-label">URL изображения</label>
                <input type="url" class="form-control" id="url" name="url" aria-label="2"
                       value="{{ $book->thumbnailUrl }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPages" class="form-label">Страниц</label>
                <input type="text" class="form-control" id="pages" name="pages" aria-label="3"
                       value="{{ $book->pageCount }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputShortDescription" class="form-label">Краткое описание</label>
                <textarea class="form-control" id="shortDescription" name="shortDescription" rows="2"
                          aria-label="4">{{ $book->shortDescription }}</textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputLongDescription" class="form-label">Подробное описание</label>
                <textarea class="form-control" id="longDescription" name="longDescription" rows="3"
                          aria-label="5">{{ $book->longDescription }}</textarea>
            </div>
            <div class="mb-3">
                @foreach ($categories as $category)
                    <label class="form-label">Категория</label>
                    <input type="text" id="category" name="category" class="form-control" list="my-list"
                           value="{{ $category->name }}">
                @endforeach
            </div>
            <div class="mb-3">
                <label for="exampleFormControlSelect1" class="form-label">Статус</label>
                <select class="form-select" id="status" name="status" aria-label="5">
                    <option selected >{{ $book->status }}</option>
                    <option>PUBLISHED</option>
                    <option>MEAP</option>
                    <option>UNPUBLISHED</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Редактировать</button>
        </form>
    </div>
</div>

</body>
</html>
