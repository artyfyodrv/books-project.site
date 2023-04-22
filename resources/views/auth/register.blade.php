<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Регистрация</title>
</head>
<body>
<form action="{{ route('register') }}" method="POST">
    @csrf
    <center>
    <div class="col-3">
        <label for="exampleInputEmail1" class="form-label">Имя</label>
        <input type="text" class="form-control" id="name" name="name">
        @error('name')
        <p class="text-red-500">{{ $message }}</p>
        @enderror
    </div>
        <div class="col-3">
            <label for="exampleInputEmail1" class="form-label">Почта</label>
            <input type="email" class="form-control" id="email" name="email">
            @error('email')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
    <div class="col-3">
        <label for="exampleInputPassword1" class="form-label">Пароль</label>
        <input type="password" class="form-control" id="password" name="password">
        @error('password')
        <p class="text-red-500">{{ $message }}</p>
        @enderror
    </div>
        <br>
    <button type="submit" class="btn btn-primary">Отправить</button>
    </center>
</form>

</body>
</html>
