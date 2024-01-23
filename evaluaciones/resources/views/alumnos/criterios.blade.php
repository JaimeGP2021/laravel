<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>{{$alumno->nombre}}</h2>
    <table>
        <tr>
            <th>CE</th>
            <th>Nota</th>
        </tr>
        @foreach ($notas as $nota)
        <tr>
            <td>{{$nota->ce->ce}}</td>
            <td>{{$nota->nota}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
