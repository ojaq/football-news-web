<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bundesliga</title>
</head>
<body>
    <h1>Bundesliga News</h1>

    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/premier">Premier League</a></li>
        <li><a href="/laliga">La Liga</a></li>
        <li><a href="/seriea">Serie A</a></li>
        <li><a href="/bundesliga">Bundesliga</a></li>
        <li><a href="/ligue1">Ligue 1</a></li>
    </ul>

    <ul>
        @foreach ($newsData['articles'] as $article)
            <li>
                <h2>{{ $article['title'] }}</h2>
                <p>{{ $article['description'] }}</p>
                @if (isset($article['urlToImage']))
                <img style="max-width: 200px" src="{{ $article['urlToImage'] }}" alt="{{ $article['title'] }}">
                @endif
                <a href="{{ $article['url'] }}" target="_blank">more...</a>
            </li>
        @endforeach
    </ul>
</body>
</html>