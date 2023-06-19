@csrf

<label for="">Titulo</label>
<input type="text" name="title" value="{{ old("title", $post->title) }}">

<label for="">Slug</label>
<input type="text" name="slug" value="{{ old("slug", $post->slug) }}">

<label for="">Categoria</label>
<select name="category_id" id="">
    <option value="">sin categoria</option>
    @foreach ($categories as $title => $id)
        <option {{ old("category_id", $post->category_id) == $id ? 'selected' : "" }} value="{{ $id }}">{{ $title }}</option>
    @endforeach
</select>
<label for="">Posteado</label>
<select name="posted" id="">
    <option {{ old("posted", $post->posted) == "yes" ? 'selected' : "" }} value="yes">no</option>
    <option {{ old("posted", $post->posted) == "not" ? 'selected' : "" }} value="not">si</option>
</select>

<label for="">Contenido</label>
<textarea name="content">{{ old("content", $post->content) }}</textarea>

<label for="">Descripcion</label>
<textarea name="description">{{ old("description", $post->description) }}</textarea>


