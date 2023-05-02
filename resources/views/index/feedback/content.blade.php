<!DOCTYPE html>
<html>
<head>
    <title>Форма обратной связи</title>
    <!-- Подключение Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

<!-- Форма обратной связи -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Форма обратной связи</h2>
    <form action="{{ route('feedback-msg') }}" method="POST">
        @csrf
        <!-- Поле для имени -->
        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Введите ваше имя">
            @error('name')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <!-- Поле для электронной почты -->
        <div class="form-group">
            <label for="email">Электронная почта</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Введите вашу электронную почту">
            @error('mail')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <!-- Поле для телефона -->
        <div class="form-group">
            <label for="phone">Телефон</label>
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Введите ваш номер телефона">
            @error('phone')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <!-- Поле для сообщения -->
        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Введите ваше сообщение"></textarea>
            @error('message')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <!-- Кнопка отправки формы -->
        {{ csrf_field() }}
        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div>

<!-- Подключение jQuery и Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
