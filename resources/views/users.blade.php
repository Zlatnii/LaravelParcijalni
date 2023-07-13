<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcijalni</title>
</head>
<body>
@foreach($users as $user)
<p>Ime: {{ $user->name}} </p>
<p>Prezime: {{ $user->lastname}}</p>
<p>Godina rođeja: {{ $user->year}}</p>
<p>Email: {{$user->email}}</p>
@endforeach
</body>
</html>