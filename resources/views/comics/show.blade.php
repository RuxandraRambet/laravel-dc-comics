<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comic Description</title>
</head>
<body>
    <div class="container">
        <h1>DC Comic</h1>
        <div class="card" style="width: 18rem;">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
            <div class="card-body">
              <h5 class="card-title">{{ $comic->title }}</h5>
              <p class="card-text">{{ $comic->description }}</p>
              <a href="{{ route('comics.index')}}" class="btn btn-primary">Torna Home Page</a>
            </div>
          </div>
    </div>
</body>
</html>