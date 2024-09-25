<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Карточки</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
<header>
        <div class="logo">
            <img src="../img/nophotoshop29-800x532.jpg" alt="логотип">
        </div>
        <nav>
            <a href="{{ route('home') }}">Главная</a>
            <a href="{{ route('array') }}">Массивы</a>
        </nav>
    </header>
    <main>
        <div class="cards">
            @foreach ($array as $card)
                <div class="card">
                    <img src="{{ $card['path'] }}" alt="карточка">
                    <h2>{{ $card['id'] }}. {{ $card['title'] }}</h2>
                    <p>{{ $card['price'] }} р.</p>
                </div>
            @endforeach
        </div>
    </main>
    <footer>
        <p>©Макаркина ВМ 2024</p>
    </footer>
</body>
</html>