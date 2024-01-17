<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create_pelicula</title>
</head>

<body>
    <form action="{{ route('peliculas.store') }}" method="post">
        @csrf
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo"><br>
        <button type="submit">Añadir película</button>
    </form>
</body>

</html>
