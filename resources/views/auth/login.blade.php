<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Авторизация</title>

    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body>
<form action="{{ route('login') }}" method="POST">
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
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="password" name="password">
            @error('password')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <br>
        {{ csrf_field() }}
        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </center>
</form>

</body>
</html>
