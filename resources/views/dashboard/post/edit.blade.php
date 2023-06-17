@extends('dashboard.layout')

@section('content')
    <h1>Actualizar Post: {{ $post->title }}</h1>    

    @include('dashboard.fragment._errors')

    <article>
        {{-- esto siempre debe ir con un punto en la ruta, ejemplo: post.store --}}
        <form action="{{ route('post.update',$post->id) }}" method="POST">
            @method('PATCH')
            @include('dashboard.post._form')
        </form>
    </article>
@endsection

