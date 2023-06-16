@extends('dashboard.layout')

@section('content')
    <h1>Actualizar Post: {{ $post->title }}</h1>    

    @include('dashboard.fragment._errors')

    <article>
        {{-- esto siempre debe ir con un punto en la ruta, ejemplo: post.store --}}
        <form action="{{ route('post.update',$post->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <label for="">Titulo</label>
            <input type="text" name="title" value="{{ $post->title }}">

            <label for="">Slug</label>
            <input readonly type="text" name="slug" value="{{ $post->slug }}">

            <label for="">Categoria</label>
            <select name="category_id" id="" >
                <option value="">sin categoria</option>
                @foreach ($categories as $title => $id)
                    <option {{ $post->category_id == $id ? 'selected' : ''}} value="{{ $id }}">{{ $title }}</option>
                @endforeach
            </select>
            <label for="">Posteado</label>
            <select name="posted" id="">
                <option {{ $post->posted == $id ? 'selected' : ''}} value="not">no</option>
                <option {{ $post->posted == $id ? 'selected' : ''}} value="yes">si</option>
            </select>

            <label for="">Contenido</label>
            <textarea name="content">{{ $post->content }}</textarea>

            <label for="">Descripcion</label>
            <textarea name="description">{{ $post->description }}</textarea>

            <button type="submit">Crear</button>
        </form>
    </article>
@endsection

