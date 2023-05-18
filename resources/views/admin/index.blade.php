<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">

    <title>Админ панель</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 sidebar">
            <ul class="nav flex-column">
                <center>
                    <li class="list-group-item">
                        <strong>
                            <a class="nav-link" href="#">Главная</a>
                        </strong>
                    </li>
                    <li class="list-group-item">
                        <button class="btn btn-link" type="button" data-bs-toggle="collapse"
                                data-bs-target="#categoryBooks"
                                aria-expanded="false" aria-controls="categoryBooks">
                            <strong>Книги</strong>
                        </button>
                        <ul class="list-group collapse" id="categoryBooks">
                            <li>
                                <a class="list-group-item" href="{{ route('admin-books-list') }}">Список книг</a>
                                <a class="list-group-item" href="#">Список категорий</a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <strong>
                            <a class="nav-link" href="{{ route('feedback-list') }}">Обратная связь</a>
                        </strong>
                    </li>
                    <li class="list-group-item">
                        <button class="btn btn-link" type="button" data-bs-toggle="collapse"
                                data-bs-target="#categorySettings"
                                aria-expanded="false" aria-controls="categorySettings">
                            <strong>Настройки</strong>
                        </button>
                        <ul class="list-group collapse" id="categorySettings">
                            <li class="list-group-item">1</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <strong>
                            <a class="nav-link" href="#">Выход</a>
                        </strong>
                    </li>
                </center>
            </ul>
        </div>
        <div class="col-md-9 col-lg-10">
            <h1 class="page-header">Админ панель</h1>
            <p>Содержимое страницы</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
