@extends('dashboard.layout')

@section('content') 

    <h1>Crear Categoria</h1>  

    @include('dashboard.fragment._errors')

    {{-- esto siempre debe ir con un punto en la ruta, ejemplo: category.store --}}
    <form action="{{ route('category.store') }}" method="POST">
        @include('dashboard.category._form')
        <button type="submit">Crear</button>
    </form>

@endsection

