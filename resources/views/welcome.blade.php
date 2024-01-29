<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Template</title>

    {{-- import js & scss --}}
    @vite('resources/js/app.js')
</head>

<body>
    <h1 class="text-center py-5">MOVIES</h1>
    <div class="container d-flex justify-content-center flex-wrap gap-5">
        @foreach ($movies as $movie)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $movie['title'] }}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Original title: {{ $movie['original_title'] }}</h6>
                <p class="card-text">Nationality: {{ $movie['nationality'] }}</p>
                <p class="card-text">Release date: {{ $movie['date'] }}</p>
                <p class="card-text">Vote: {{ $movie['vote'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</body>

</html>