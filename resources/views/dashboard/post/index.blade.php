@extends('dashboard.layout')

@section('content')


    <a class="btn boton-success my-3" type="button" href="{{ route('post.create') }}">Crear Post</a>

    <table class="main-table">
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
                    {{ $p->category->title }}
                </td>
                <td>{{ $p->posted }}</td>
                <td class="min-w-full flex flex-row items-center" >
                    <a class="btn boton-editar my-3" href="{{ route('post.edit', $p) }}">Editar</a>
                    <a class="btn boton-ver my-3" href="{{ route('post.show', $p) }}">Ver</a>
                    <form action="{{ route('post.destroy', $p) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn boton-danger my-3" type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
@endsection