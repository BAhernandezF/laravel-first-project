@extends('dashboard.layout')

@section('content')
    <h1 class="titulos-form">Actualizar Post: {{ $post->title }}</h1>    

    @include('dashboard.fragment._errors')

    <article>
        {{-- esto siempre debe ir con un punto en la ruta, ejemplo: post.store --}}
        <form action="{{ route('post.update',$post->id) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @include('dashboard.post._form',["task" => "edit"])
            <div class="py-5 px-10 mx-0 min-w-full flex flex-col items-center">
                <button class="botones-form btn boton-success" type="submit">Editar</button>
            </div>
            
        </form>
    </article>
@endsection

