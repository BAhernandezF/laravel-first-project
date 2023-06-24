@csrf


<div class="formulario-base">
    <div class="contenedor-a">
        <div class="margen-form">
            <label for="">Titulo</label>
            <input class="form-control" class="form-control" type="text" name="title" value="{{ old("title", $category->title) }}">
    
            <label for="">Slug</label>
            <input class="form-control" class="form-control" type="text" name="slug" value="{{ old("slug", $category->slug) }}">
        </div>
    </div>
</div>




