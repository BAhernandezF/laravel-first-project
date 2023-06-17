@extends('dashboard.layout')

@section('content')

    <a href="{{ route('post.create') }}">Crear</a>

    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Posted</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $p)
            <tr>
                <td>{{ $p->title }}</td>
                <td>
                    @if($p->category_id == 1) 
                        Cate1
                    @elseif($p->category_id == 2)
                        Cate2
                    @endif
                </td>
                <td>{{ $p->posted }}</td>
                <td>
                    <a href="{{ route('post.edit', $p) }}">Editar</a>
                    <a href="{{ route('post.show', $p) }}">Ver</a>+
                    <form action="{{ route('post.destroy', $p) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit">Eliminar</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
@endsection