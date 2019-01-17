<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1> Hola! </h1>
    
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Tlefono</th>
                <th>Correo</th>
            </tr>
        </thead>
    <tbody>
    @foreach($contactos as $contacto)
        <tr>
            <td>{{ $contacto->nombre}}</td>
            <td>{{ $contacto->telefono}}</td>
            <td>{{ $contacto->contacto}}</td>
        </tr>
    @endforeach
    </tbody>
    
</table>
</body>
</html>