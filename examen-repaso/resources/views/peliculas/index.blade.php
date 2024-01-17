<table class="table-auto">
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Editar</th>
            <th>Mostrar</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($peliculas as $pelicula)
            <tr>
                <td>{{ $pelicula->titulo }}</td>
                <td>
                    <form action="{{ route('peliculas.edit', $pelicula) }}" method="get">
                        @csrf
                        <button type="submit">Editar</button>
                    </form>
                </td>
                <td>
                    <button type="button"><a href={{ route('peliculas.show', $pelicula) }}>Mostrar</a></button>
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
    </tbody>
</table>

<button><a href="{{ route('peliculas.create') }}">Insertar nueva pelicula</a></button>
