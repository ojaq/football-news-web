<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Top Headlines</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Top Headlines from All Leagues</h1>
    
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/premier">Premier League</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/laliga">La Liga</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/seriea">Serie A</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/bundesliga">Bundesliga</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/ligue1">Ligue 1</a>
            </li>
        </ul>
    
        <ul class="list-group mt-4">
            @foreach ($newsData['articles'] as $article)
                <li class="list-group-item">
                    <h4 class="list-group-item-heading">{{ $article['title'] }}</h4>
                    <p class="list-group-item-text">{{ $article['description'] }}</p>
                    @if (isset($article['urlToImage']))
                    <img class="img-fluid mt-2" style="max-width: 200px" src="{{ $article['urlToImage'] }}" alt="{{ $article['title'] }}">
                    @endif
                    <a class="btn btn-primary mt-2" href="{{ $article['url'] }}" target="_blank">Read more...</a>
                </li>
            @endforeach
        </ul>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
