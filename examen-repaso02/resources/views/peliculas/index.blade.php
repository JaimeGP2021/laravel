<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Película_Index</title>
</head>

<body>
    <table>
        <tr>
            <th>Título</th>
            <th>Mostrar</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        @foreach ($peliculas as $pelicula)
            <tr>
                <td>{{ $pelicula->titulo }}</td>
                <td>
                    <button type="button">
                        <a href={{ route('peliculas.show', $pelicula) }}>Mostrar</a>
                    </button>
                </td>
                <td>
                    <form action="{{ route('peliculas.edit', $pelicula) }}" method="get">
                        @csrf
                        <button type="submit">Editar</button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('peliculas.destroy', $pelicula) }}" method="post">
                        @csrf
                        @method('Delete')
                        <button type="submit">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <button><a href="{{ route('peliculas.create') }}">Añadir nueva película</a></button>

</body>

</html>
