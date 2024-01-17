<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Pelicula</title>
</head>
<body>
    <p>{{ $pelicula->titulo }}</p>
    <p>El total de entradas de {{ $pelicula->titulo }} son: {{$entradas}}</p>
</body>
</html>
