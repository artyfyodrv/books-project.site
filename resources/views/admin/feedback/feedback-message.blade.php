<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Сообщение №{{ $message->id }}</h3>
    </div>
    <div class="card-body">
        <p><strong>Имя:</strong> {{ $message->name }}</p>
        <p><strong>Email:</strong> {{ $message->email }}</p>
        <p><strong>Телефон:</strong> {{ $message->phone }}</p>
        <p><strong>Сообщение:</strong></p>
        <p>{{ $message->message }}</p>
    </div>
</div>
</center>

</body>
</html>
