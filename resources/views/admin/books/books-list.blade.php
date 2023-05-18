<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Список всех книг</title>
</head>
<body>
<div class="container">
    <h2>Список всех книг</h2>
    <a href="{{ route('admin-panel') }}">
        <button type="button" class="btn btn-secondary">Вернуться</button>
    </a>
    <button class="btn btn-info" onclick="location.reload()">Обновить</button>
    <button
        type="button" style="margin-left: 70%" class="btn btn-success"
        data-bs-toggle="modal" data-bs-target="#exampleModal">Добавить книгу
    </button>
    <!-- Модальное окно -->
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Статус</th>
            <th>Название</th>
            <th>Артикул(isbn)</th>
            <th>Кол-во страниц</th>
            <th>Краткое описание</th>
            <th>Дата публикации</th>
            <th>Создан</th>
            <th>Обновлен</th>
            <th>Управление</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($booksData as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->status }}</td>
                <td> {{$book->title}}</td>
                <td> {{$book->isbn}}</td>
                <td> {{$book->pageCount}}</td>
                <td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"> {{$book->shortDescription}}</td>
                <td> {{$book->publishedDate}}</td>
                <td> {{$book->created_at}}</td>
                <td> {{$book->updated_at}}</td>
                <td>
                    <a href="{{ route('admin-get-book', ['id' => $book->id]) }}"><button type="button" class="btn btn-secondary">Открыть</button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @include('admin/books/form-book')
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
