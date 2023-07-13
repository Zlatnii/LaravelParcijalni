<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcijalni</title>
</head>
<body>
@foreach($media as $movie)
<p>Naziv Filma: {{ $movie->title}} </p>
<p>Prezime: {{ $movie->description}}</p>
<p>Godina rođeja: {{ $movie->type}}</p>
<p>Email: {{$movie->year}}</p>
@endforeach
</body>
</html>