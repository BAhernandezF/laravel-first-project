@extends('dashboard.layout')

@section('content') 

    <h1 class="titulos-form" >Crear Categoria</h1>  

    @include('dashboard.fragment._errors')

    {{-- esto siempre debe ir con un punto en la ruta, ejemplo: category.store --}}
    <form action="{{ route('category.store') }}" method="POST">
        @include('dashboard.category._form')

        <div class="py-5 px-10 mx-0 min-w-full flex flex-col items-center">
            <button class="botones-form btn boton-success" type="submit">Crear</button>
        </div>
        
        
    </form>

@endsection

