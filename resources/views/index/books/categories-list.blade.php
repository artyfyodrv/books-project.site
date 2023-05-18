<!DOCTYPE html>
<html>
<head>
    <title>Список категорий</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Список категорий</h1>
    <ul class="list-group">
        @foreach ($categories as $list)
        <li class="list-group-item">
            <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#category{{ $list->category }}"
                    aria-expanded="false" aria-controls="category{{ $list->category }}">
                {{ $list->category }}
            </button>
            <ul class="list-group collapse" id="category{{ $list->category }}">
                @foreach ($subCategories as $subList)
                <li class="list-group-item">{{$subList->category}}</li>
                @endforeach
            </ul>
        </li>
        @endforeach
    </ul>
</div>

<!-- Подключение файлов JavaScript Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
