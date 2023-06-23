@extends('dashboard.layout')

@section('content')

    <a type="button" href="{{ route('category.create') }}">Crear</a>
    <br>
    <br>
    <a type="button" href="{{ route('post.index') }}">Ir a Post</a>
    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $c)
            <tr>
                <td>{{ $c->title }}</td>
                <td>
                    <a href="{{ route('category.edit', $c) }}">Editar</a>
                    <a href="{{ route('category.show', $c) }}">Ver</a>+
                    <form action="{{ route('category.destroy', $c) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit">Eliminar</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}
@endsection