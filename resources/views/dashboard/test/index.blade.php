<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test View</title>
</head>
<body>

    @if($nombre == 'Bastian UwU')
        es true
    @else
        no es true
    @endif
    <ul>
        @foreach ($arreglo as $a)
            <li>{{$a}}</li>
        @endforeach 
    </ul>

    @forelse ($arreglo as $a)
        <h2>{{$a}}</h2>
    @empty
        <h2>no hay data</h2>
    @endforelse
    

    <h1>{{$nombre}}</h1>
    <h1>{{--$edad--}}</h1>
    <h1>{{$email}}</h1>
    <h1>{!! $html !!}</h1>
</body>
</html>