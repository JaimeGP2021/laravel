<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alumnos</title>
</head>

<body>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Detalles</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
        @foreach ($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->nombre }}</td>
                <td><button><a href="{{ route('alumnos.show', $alumno) }}">Detalles</a></button></td>
                <td></td>
                <td><form action="{{ route('alumnos.destroy', $alumno) }}" method="post">
                    @csrf
                    @method('Delete')
                    <button type="submit">Borrar</button>
                </form></td>
            </tr>
        @endforeach
    </table>
    <button><a href="{{ route('alumnos.create') }}">Añadir alumno</a></button>
</body>

</html>
