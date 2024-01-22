<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create alumno</title>
</head>

<body>
    <form action="{{ route('alumnos.update', $alumno) }}" method="post">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre" value="{{$alumno->nombre}}"> <br>
        <button type="submit">Editar alumno</button>
    </form>
</body>

</html>
