@extends('dashboard.layout')

@section('content')


    <a class="btn boton-success my-3" type="button" href="{{ route('category.create') }}">Crear</a>

    <table class="main-table">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $c)
            <tr>
                <td >{{ $c->title }}</td>
                <td class="min-w-full flex flex-row items-center" >
                    <a class=" btn boton-editar my-2" href="{{ route('category.edit', $c) }}">Editar</a>
                    <a class=" btn boton-ver my-2" href="{{ route('category.show', $c) }}">Ver</a>
                    <form action="{{ route('category.destroy', $c) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn boton-danger my-2" type="submit">Eliminar</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}
@endsection