@csrf

<div class="formulario-base">
    <div class="contenedor-a">
        <div class="margen-form">
            <label for="">Titulo</label>
            <input class="form-control" type="text" name="title" value="{{ old("title", $post->title) }}">
    
            <label for="">Slug</label>
            <input class="form-control" type="text" name="slug" value="{{ old("slug", $post->slug) }}">
        
            <label for="">Categoria</label>
            <select class="form-control" name="category_id" id="">
                <option value="">sin categoria</option>
                @foreach ($categories as $title => $id)
                    <option {{ old("category_id", $post->category_id) == $id ? 'selected' : "" }} value="{{ $id }}">{{ $title }}</option>
                @endforeach
            </select>
            <label for="">Posteado</label>
            <select class="form-control" name="posted" id="">
                <option {{ old("posted", $post->posted) == "yes" ? 'selected' : "" }} value="yes">no</option>
                <option {{ old("posted", $post->posted) == "not" ? 'selected' : "" }} value="not">si</option>
            </select>
        
            <label for="">Contenido</label>
            <textarea style="resize: none" cols="40" rows="6" class="form-control" name="content">{{ old("content", $post->content) }}</textarea>
        
            <label for="">Descripcion</label>
            <textarea style="resize: none" cols="40" rows="5" class="form-control" name="description">{{ old("description", $post->description) }}</textarea>
        
            @if (isset($task) && $task == "edit")
                <label for="">Imagen</label>
                <input type="file" name="image">
            @endif
    
        </div>
    
    </div>
    
</div>




