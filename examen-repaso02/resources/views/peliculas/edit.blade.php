<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Pelicula</title>
</head>

<body>
    <form action="{{ route('peliculas.update', $pelicula) }}" method="post">
        @csrf
        @method('PUT')
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" value="{{ $pelicula->titulo }}"> <br>
        <button type="submit">Guardar cambios</button>
    </form>
</body>

</html>
