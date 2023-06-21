@extends('dashboard.layout')

@section('content')
    <h1>Actualizar Post: {{ $post->title }}</h1>    

    @include('dashboard.fragment._errors')

    <article>
        {{-- esto siempre debe ir con un punto en la ruta, ejemplo: post.store --}}
        <form action="{{ route('post.update',$post->id) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @include('dashboard.post._form',["task" => "edit"])
            <button type="submit">Editar</button>
        </form>
    </article>
@endsection

