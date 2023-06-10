<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <title>Inicio</title>
</head>
<body>
    <h1>Buenos dias</h1>
    <h2> {{ $msj }} </h2>
    <h2> {{ $edad }} </h2>

    <ul>
        <li><a href="/contacto">Contactame</a></li>
        <li><a href="{{ route('contacto') }}">Contactame(ruta con nombre)</a></li>
    </ul>

</body>
</html>