<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Список обратной связи</title>
</head>
<body>
<div class="container">
    <h2>Список сообщений</h2>
    <table class="table">
        <thead>
        <tr>
            <th class="col-1">ID</th>
            <th>Название</th>
            <th>Email</th>
            <th>Телефон</th>
            <th>Сообщение</th>
            <th>Создано</th>
            <th>Управление</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($messages as $message)
        <tr>
            <td>{{ $message->id }}</td>
            <td>{{ $message->name }}</td>
            <td>{{ $message->email }}</td>
            <td>{{ $message->phone }}</td>
            <td>{{ $message->message }}</td>
            <td>{{ $message->created_at }}</td>
            <td>
                <a href="">
                    <button type="button" class="btn btn-secondary">Открыть сообщение</button>
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>