<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Главная страница</title>
</head>
<body>
<!-- Навбар -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- Список ссылок -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('categories-list') }}">Книги</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('feedback-form') }}">Обратная связь</a>
            </li>
        </ul>

        <!-- Кнопки -->
        <div class="navbar-nav">
            <a class="nav-link" href="{{ route('register-form') }}">Регистрация</a>
            <a class="nav-link" href="{{ route('login-form') }}">Авторизация</a>
        </div>
    </div>
</nav>

<!-- Подключение jQuery и Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
