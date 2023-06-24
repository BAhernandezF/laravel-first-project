@extends('dashboard.layout')

@section('content')
    <h1 class="titulos-form" >Actualizar Categoria: {{ $category->title }}</h1>    

    @include('dashboard.fragment._errors')

    <article>
        {{-- esto siempre debe ir con un punto en la ruta, ejemplo: category.store --}}
        <form action="{{ route('category.update',$category->id) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @include('dashboard.category._form',["task" => "edit"])
            <div class="py-5 px-10 mx-0 min-w-full flex flex-col items-center">
                <button class="botones-form btn boton-success" type="submit">Editar</button>
            </div>
            
        </form>
    </article>
@endsection

