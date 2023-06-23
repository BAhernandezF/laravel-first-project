@extends('dashboard.layout')

@section('content')
    <h1>Actualizar Categoria: {{ $category->title }}</h1>    

    @include('dashboard.fragment._errors')

    <article>
        {{-- esto siempre debe ir con un punto en la ruta, ejemplo: category.store --}}
        <form action="{{ route('category.update',$category->id) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @include('dashboard.category._form',["task" => "edit"])
            <button type="submit">Editar</button>
        </form>
    </article>
@endsection

