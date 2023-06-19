@extends('dashboard.layout')

@section('content') 

    <h1>Crear un post</h1>  

    @include('dashboard.fragment._errors')

    {{-- esto siempre debe ir con un punto en la ruta, ejemplo: post.store --}}
    <form action="{{ route('post.store') }}" method="POST">
        @include('dashboard.post._form')
        <button type="submit">Crear</button>
    </form>

@endsection

