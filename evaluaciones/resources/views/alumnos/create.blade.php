<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create alumno</title>
</head>

<body>
    <form action="{{ route('alumnos.store') }}" method="post">
        @csrf
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre"> <br>
        <button type="submit">Guardar nuevo alumno</button>
    </form>
</body>

</html>
