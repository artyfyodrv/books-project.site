<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Админ панель</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 sidebar">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Книги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('feedback-list') }}">Обратная связь</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Настройки</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Выход</a>
                </li>
            </ul>
        </div>
        <div class="col-md-9 col-lg-10">
            <h1 class="page-header">Админ панель</h1>
            <p>Содержимое страницы</p>
        </div>
    </div>
</div>

</body>
</html>
