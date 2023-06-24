@extends('dashboard.layout')

@section('content') 

    <h1 class="titulos-form">Crear un post</h1>  

    @include('dashboard.fragment._errors')

    {{-- esto siempre debe ir con un punto en la ruta, ejemplo: post.store --}}
    <form action="{{ route('post.store') }}" method="POST">
        @include('dashboard.post._form')
        <button class="botones-form" type="submit">Crear</button>
    </form>

@endsection

