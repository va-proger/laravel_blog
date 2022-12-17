<form action="{{ route('admin.post.update', $post->id) }}" method="POST" class=" " enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="form-group w-25">
        <input type="text" name="title" class="form-control" placeholder="Название категории" value="{{ $post->title}}">
        @error('title')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <textarea id="summernote" name="content">{{ $post->content }}</textarea>
        @error('content')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group w-25">
        <label for="exampleInputFile">Добавить превью</label>
        <div class="w- mb-2">
            <img src="{{ url('storage/' . $post->preview_image) }}" alt="" class="w-50">
        </div>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="preview_image"  >
                <label class="custom-file-label">Выберите изображение</label>
            </div>
            <div class="input-group-append">
                <span class="input-group-text">Загрузка</span>
            </div>
        </div>
        @error('preview_image')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group w-25">
        <label for="exampleInputFile">Добавить главное изображение</label>
        <div class="w-100 mb-2">
            <img src="{{ url('storage/' . $post->main_image ) }}" alt="" class="w-50">
        </div>
        <div class="input-group">
            <div class="custom-file">

                <input type="file" class="custom-file-input" name="main_image" >
                <label class="custom-file-label"  >Выберите изображение</label>
            </div>
            <div class="input-group-append">
                <span class="input-group-text">Загрузка</span>
            </div>
        </div>
        @error('main_image')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group w-50">
        <label>Выбирите категорию</label>
        <select name="category_id" class="custom-select">
            @foreach($categories as $category)
                <option value="{{ $category->id }}"
                    {{ $category->id == $post->category_id ? 'selected' : '' }}
                >{{ $category->title }}</option>
            @endforeach
        </select>
        @error('category_id')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Теги</label>
        <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Выбириет теги" style="width: 100%;">
            @foreach($tags as $tag)
                <option value="{{ $tag->id }}"
                    {{ is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? ' selected' : ''}}
                >{{ $tag->title }}</option>
            @endforeach
        </select>
        @error('tag_ids')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Обновить">
    </div>
</form>
