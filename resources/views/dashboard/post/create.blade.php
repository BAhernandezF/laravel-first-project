@extends('dashboard.layout')

@section('content')
    <h1>Creando un post</h1>    

    @include('dashboard.fragment._errors')

    <article>
        {{-- esto siempre debe ir con un punto en la ruta, ejemplo: post.store --}}
        <form action="{{ route('post.store') }}" method="POST">
            @csrf

            <label for="">Titulo</label>
            <input type="text" name="title">

            <label for="">Slug</label>
            <input type="text" name="slug">

            <label for="">Categoria</label>
            <select name="category_id" id="">
                <option value="">sin categoria</option>
                @foreach ($categories as $title => $id)
                    <option value="{{ $id }}">{{ $title }}</option>
                @endforeach
            </select>
            <label for="">Posteado</label>
            <select name="posted" id="">
                <option value="yes">no</option>
                <option value="not">si</option>
            </select>

            <label for="">Contenido</label>
            <textarea name="content"></textarea>

            <label for="">Descripcion</label>
            <textarea name="description"></textarea>

            <button type="submit">Crear</button>
        </form>
    </article>
@endsection

