<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>List</title>
    <meta name="description" content="条件に一致したタイトル一覧">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- リセットCSS -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">

    <!-- Googleフォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div>
        <header class="page-header wrapper">
            <h1>
                <a href="#"><img class="return" src="{{ asset('images/return_button.png') }}" alt=""></a>
            </h1>
            <h1>
                <a href="{{ url('/') }}"><img class="logo" src="{{ asset('images/logo.png') }}" alt=""></a>
            </h1>
        </header>
        <h2 class="page-title"><img src="{{ asset('images/Comic List_text.png') }}" alt=""></h2>
    </div>

    <main class="wrapper grid">
        @forelse($comics as $comic)
            <div class="item" data-genre="{{ $comic->genre }}">
                <a href="{{ url('/comics/' . $comic->id) }}">
                    <img src="{{ $comic->image ?? asset('images/noimage.jpg') }}" alt="{{ $comic->title }}">
                    <p>{{ $comic->title }}</p>
                </a>
            </div>
        @empty
            <p>該当する作品がありません</p>
        @endforelse
    </main>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>